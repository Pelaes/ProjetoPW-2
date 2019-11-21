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

    $nomeProduto = $_POST['nomeProduto'];

    if(empty($nomeProduto)){
        echo "ErroNome";
        die();
    }

    include "../model/produtoModel.php";
    
?>