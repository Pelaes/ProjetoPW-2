<?php
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("Location: ../");
    }
    switch($_SESSION['tipoUsuario']){
        case "cliente":
            header("Location: ../Home");
            break;
    }
    if(empty($_GET)){
        header("Location: ../view/Administracao/produtos.php");
    }

    $idProduto = $_GET['id'];

    // if(empty($nomeProduto)){
    //     echo "ErroNome";
    //     die();
    // }

    include "../model/buscarProdutoModel.php";
    buscarProdutoAlteracao($idProduto);
    
?>