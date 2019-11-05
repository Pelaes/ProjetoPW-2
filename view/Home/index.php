


<?php
    session_start();
    if(!isset($_SESSION['login']) || $_SESSION['login'] != true){
        header("Location: ../../");
    }
    switch($_SESSION['tipoUsuario']){
        case "administrador":
            header("Location: ../Administracao");
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css-padrao/css-padrao.css">
    <style>
        .ImagemGrande{
            width: 100%;
            height: 200px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-xl bg-primary navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">LOGOMARCA</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <div class="mr-auto">
                    <ul class="navbar-nav lead">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Carrossel</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Itens alinhados</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-white">Cards</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="navbar-nav lead">
                        <li class="nav-item">
                            <?php
                                $nome = explode(" ", $_SESSION['nome']);
                                //separa as strings por um parametro pré-determinado
                                echo "<a href='#' class='nav-link text-white'>".$nome[0]."</a>";
                            ?>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-auto">
                            <a href="Carrinho.php" style="width:50px; height:50px; padding-top: 10px;" class="btn btn-outline-light ml-xl-3 mb-3 mb-xl-0 mx-sm-auto d-block rounded-circle">
                                <img src="../../imagens/carrinho_p.png" alt="Carrinho de compras">
                                <?php
                                    if(isset($_SESSION['indice'])){
                                ?>
                                        <span style="position: relative; top: -12px; left: -5px;" class="ml-1 badge badge-light"><?php echo $_SESSION['indice']?></span>
                                <?php
                                    }
                                ?>
                            </a>
                        </li>
                        <li class="nav-item mx-auto">
                            <a href="../cabecalhos/deslogar.php" style="width:50px; height:50px; padding-top: 10px;" class="btn btn-outline-light ml-xl-3 mb-3 mb-xl-0 mx-sm-auto d-block rounded-circle">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row mb-5">
            <?php
                include "../../controller/ListarProduto.php";
                ValidarBusca();
            ?>
        </div>
    </div>

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>