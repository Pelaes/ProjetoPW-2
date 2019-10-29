<?php 
    include "conexao.php";

    $sql = $conn->prepare("INSERT INTO Produto (foto, nome, descricao, preco, estoque, ativo) VALUES (?,?,?,?,?,?)");
    $sql -> bind_param("sssdii", $imagem, $nomeProduto, $descricao, $preco, $estoque, $ativo);
    $sql -> execute() or die("ErroBanco");

    echo "Sucesso";

    $sql -> close();
    $conn -> close();

    die();

?>