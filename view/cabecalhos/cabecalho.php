<nav class="navbar navbar-expand-xl bg-light navbar-light">
<div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/logo2.png" width="70px" height="70px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <!-- <div class="mr-auto">
            <ul class="navbar-nav lead">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a href="Cardapio.php" class="nav-link text-white">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="KitFesta.php" class="nav-link text-white">Kit Festa</a>
                </li>
                <li class="nav-item">
                    <a href="Pedidos.php" class="nav-link text-white">Meus Pedidos</a>
                </li>
            </ul>
        </div> -->
        <div class="ml-auto">
            <?php
            if(isset($_SESSION['logado'])){
                $nome = $_SESSION['logado'];
                echo    '<ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="DadosCadastrais.php" class="btn btn-success btn-block mb-3 mb-xl-0">Bem vindo(a) '.$nome.'</a>
                            </li>
                        </ul>';
            }
            else{
                echo    '<ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="Login.php" class="btn btn-success btn-block mb-3 mb-xl-0">Entre ou cadastre-se</a>
                            </li>
                        </ul>';
            }
            ?>
        </div>
        <div class="ml-auto">
            <form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <input class="form-control mr-xl-4 mb-3 mb-xl-0" type="text" placeholder="Busque seu produto">
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-success btn-block ml-xl-3 mb-3 mb-xl-0" type="submit">Buscar</button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="ml-auto">
            <ul class="navbar-nav">
                <li class="nav-item mx-auto">
                    <a href="#" style="width:50px; height:50px; padding-top: 10px;" class="btn btn-outline-success ml-xl-3 mb-3 mb-xl-0 mx-sm-auto d-block rounded-circle">
                        <img src="images/carrinho_p.png" alt="Carrinho de compras">
                        <?php
                            if(isset($_SESSION['indice'])){
                        ?>
                                <span style="position: relative; top: -12px; left: -5px;" class="ml-1 badge badge-light"><?php echo $_SESSION['indice']?></span>
                        <?php
                            }
                        ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</nav>