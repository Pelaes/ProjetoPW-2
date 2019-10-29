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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../css-padrao/css-padrao.css">
    <style>
        .imgCadastro{
            width: 300px;
            height: 200px;
        }
        .imgBorder{
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <?php
        include "../cabecalhos/navADM.php";
    ?>
   
    <div class="row mt-5">
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center">Cadastro de Produtos</h1>  
            <form action="../../controller/CadastroProduto.php" method="POST" id="cadProduto" enctype='multipart/form-data'>
                <div id="imagem" class="imgCadastro mx-auto my-5">
                    <img class='card-img-top imgCadastro imgBorder' src='../../imagens/download.png'>
                </div>
                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <input type='file' class='form-control-file card-title' accept='image/*' id='arquivo' name='arquivo'>  
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <input class="form-control form-control-lg" type="text" placeholder="Digite o nome do produto" name="nome">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <textarea rows="5" class="form-control form-control-lg" placeholder="Digite a descrição do produto" name="descricao"></textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-lg-5 my-3 ml-auto">
                        <input class="form-control form-control-lg" type="text" placeholder="Digite o preço" name="preco">
                    </div>
                    <div class="form-group col-lg-4 my-3 mr-auto">
                        <input class="form-control form-control-lg" type="text" placeholder="Digite a quantidade em estoque" name="estoque">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-9 my-3 mx-auto">
                        <div class="custom-control form-control-lg custom-checkbox">
                            <input type="checkbox" class="custom-control-input mt-2" id="customCheck1" name="ativo" checked>
                            <label class="ml-2 custom-control-label" for="customCheck1">Ativar produto?</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-lg-6 my-3 mx-auto">
                        <input class="form-control btn-lg btn btn-success" type="submit" value="Cadastrar" name="cadastro" id="Cadastrar">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 mx-auto">
            <h1 class="text-center">Alterar Produtos</h1>   
        </div>
    </div>

    <div class="modal fade" id="vazio" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 id="mensagem">
                            
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script src="../../javascript/validacoes.js"></script>

    <script type='text/javascript'>
        $("#arquivo").on('change', function () {
            if (typeof (FileReader) != "undefined") {

                var imagem = $("#imagem");
                imagem.empty();

                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "card-img-top imgCadastro imgBorder"
                    }).appendTo(imagem);
                }
                imagem.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } 
            else{
                alert("Este navegador nao suporta FileReader.");
            }
        });
    </script>
</body>
</html>