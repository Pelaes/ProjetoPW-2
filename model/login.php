<?php
    
    include_once 'conexao.php';

    $sql = $conn->prepare("SELECT * FROM Pessoa WHERE (email = ? OR userName = ?) AND senha = ? AND ativo = 'ativo'");

    $sql->bind_param("sss",$user, $user, $pass);

    $sql->execute();

    $resultado = $sql->get_result();
    $linha = $resultado->fetch_assoc();

    $sql -> close();
    $conn -> close();

    if(empty($linha)){
        echo "FalhaLogin";
        die();
    }
    else{
        $_SESSION['idPessoa'] = $linha['idPessoa'];
        $_SESSION['login'] = true;
        $_SESSION['nome'] = $linha['nome'];
        $_SESSION['tipoUsuario'] = $linha['tipoUsuario'];
        
        switch($linha['tipoUsuario']){
            case "administrador":
                echo "SucessoADM";
                break;
            case "cliente":
                echo "SucessoCliente";
                break;
            default:
                echo "FalhaLogin";
                die();
        }
    }
?>