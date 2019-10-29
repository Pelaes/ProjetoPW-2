<?php
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("Location: ../../");
    }
    switch($_SESSION['tipoUsuario']){
        case "cliente":
            header("Location: ../Home");
            break;
    }
    if(empty($_POST)){
        header("Location: ../view/Administracao/produtos.php");
    }

    $nomeProduto = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
    $imagem = "";

    if (empty($nomeProduto))
    {
        echo "ErroNome";     
        exit();
    }

    if (empty($descricao))
    {
        echo "ErroDesc";     
        exit();
    }

    if (empty($preco))
    {
        echo "ErroPreco";     
        exit();
    }

    if (empty($estoque))
    {
        echo "ErroEstoque";     
        exit();
    }

     // verifica se foi enviado um arquivo
     if ( isset( $_FILES['arquivo']['name'] ) && $_FILES['arquivo']['error'] == 0 ) {
        
        $arquivo_tmp = $_FILES[ 'arquivo' ][ 'tmp_name' ];
        $nome = $_FILES[ 'arquivo' ][ 'name' ];
    
        // Pega a extensão
        $extensao = pathinfo ( $nome, PATHINFO_EXTENSION );
    
        // Converte a extensão para minúsculo
        $extensao = strtolower ( $extensao );
    
        // Somente imagens, .jpg;.jpeg;.gif;.png
        // Aqui eu enfileiro as extensões permitidas e separo por ';'
        // Isso serve apenas para eu poder pesquisar dentro desta String
        if ( strstr ( '.jpg;.jpeg;.gif;.png', $extensao ) ) {
            // Cria um nome único para esta imagem
            // Evita que duplique as imagens no servidor.
            // Evita nomes com acentos, espaços e caracteres não alfanuméricos
            $novoNome = uniqid ( time () ) . '.' . $extensao;
    
            // Concatena a pasta com o nome
            $destino = '../imagens/' . $novoNome;
    
            // tenta mover o arquivo para o destino
            if ( @move_uploaded_file ( $arquivo_tmp, $destino ) ) {
                //echo 'Arquivo salvo com sucesso em : <strong>' . $destino . '</strong><br />';
                //echo '<img src="' . $destino . '"/>';
                $imagem = $novoNome;
            }
            else{
                echo "ErroSalvar";     
                exit();
            }
        }
        else{
            echo "ErroFormato";     
            exit();
        }
    }
    else{
        echo "ErroImgVazio";     
        exit();
    }

    if(isset($_POST['ativo'])){
        $ativo = true;
    }
    else{
        $ativo = false;
    }

    include "../model/cadProdutoModel.php";

?>