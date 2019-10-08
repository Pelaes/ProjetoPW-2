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

    $nome = $_POST['nome'];
?>