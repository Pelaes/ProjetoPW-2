<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bem-Vindo ao E-Commerce da ETEC</title>
    <link rel="stylesheet" href="css-padrao/css-padrao.css">
    <style>
        .imgCarr{
             width : 350px; 
             height : 350px; 
        }
        .imgPromo{
            width : 100%; 
            height : 600px; 
        }
        .imgPromoSmall{
            width : 100%; 
            height : 300px; 
        }
    </style>
</head>

<body>
    <?php
        include "cabecalhos/cabecalho.php";
        include "dal/buscarProduto.php";
    ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <h1 class="text-center">
                        <a class="nav-link" href="Cardapio.php#salgados">Programação de Computadores</a>
                    </h1>
                    <h5 class="text-center">Aprenda a desenvolver aplicações em diversas linguagens</h5>
                </div>
                <div id="CarrosselSite" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarrosselSite" data-slide-to="0" class="active"></li>
                        <li data-target="#CarrosselSite" data-slide-to="1"></li>
                        <li data-target="#CarrosselSite" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="images/csharp.png" class="img-fluid d-block w-100 imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="images/csharp.png" class="img-fluid d-block w-100 imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="images/csharp.png" class="img-fluid d-block w-100 imgCarr">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#CarrosselSite" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#CarrosselSite" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h1 class="text-center">
                        <a class="nav-link" href="Cardapio.php#doces">Manutenção de Computadores</a>
                    </h1>
                    <h5 class="text-center">Aprenda a arte de montar e consertar computadores</h5>
                </div>
                <div id="CarrosselSite2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarrosselSite2" data-slide-to="0" class="active"></li>
                        <li data-target="#CarrosselSite2" data-slide-to="1"></li>
                        <li data-target="#CarrosselSite2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="images/java.png" class="img-fluid d-block w-100 imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="images/java.png" class="img-fluid d-block w-100 imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="images/java.png" class="img-fluid d-block w-100 imgCarr">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#CarrosselSite2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#CarrosselSite2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div>
                    <h1 class="text-center">
                        <a class="nav-link" href="KitFesta.php">Informática básica</a>
                    </h1>
                    <h5 class="text-center">Word? Excel? Internet? Vem com a gente!</h5>
                </div>
                <div id="CarrosselSite3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#CarrosselSite3" data-slide-to="0" class="active"></li>
                        <li data-target="#CarrosselSite3" data-slide-to="1"></li>
                        <li data-target="#CarrosselSite3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner mt-4">
                        <div class="carousel-item active">
                            <img src="images/php.jpg" class="img-fluid d-block w-100 imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="images/php.jpg" class="img-fluid d-block w-100 imgCarr">
                        </div>
                        <div class="carousel-item">
                            <img src="images/php.jpg" class="img-fluid d-block w-100 imgCarr">
                        </div>
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#CarrosselSite3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#CarrosselSite3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Avançar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <h3 class="text-center display-4 text-primary my-5">Vejam nossas ofertas!</h3>
        </div>
    </div>

    <div class="container">
        <div>
            <h4 class="text-primary my-5">Programação de Computadores</h4>
        </div>
        <div class="container my-5">
            <div class="row mb-5">
                <?php
                    buscarProdutoIndex("Programação");
                ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <h4 class="text-primary my-5">Manutenção de Computadores</h4>
        </div>
    </div>

    <div class="container">
        <div>
            <h4 class="text-primary my-5">Informática Básica</h4>
        </div>
    </div>



    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>