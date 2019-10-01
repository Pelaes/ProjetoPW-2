<?php  
    session_start();

    if(empty($_POST)){
        header("Location: ../");
        die();
    }

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if(empty($user)){
        echo "ErroEmail";
        die();
    }
    if(empty($pass)){
        echo "ErroSenha";
        die();
    }

    include_once '../model/login.php';
?>