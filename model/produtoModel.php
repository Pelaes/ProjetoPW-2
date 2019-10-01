<?php
function Somar ($num1, $num2){
    $soma =  $num1 + $num2;
    return $soma;
}

function buscarProdutos(){

    include "conexao.php";
    $sql = $conn->prepare("SELECT * FROM Produto WHERE ativo = true");
    $sql->execute();
    $resultado = $sql->get_result();
    while ($linha = $resultado->fetch_assoc()) {
        echo "
            <div class='col-lg-3 col-md-4 col-sm-6 mb-5'>
                <div class='card h-100'>
                    <img class='card-img-top ImagemGrande' src='../../imagens/".$linha['foto']."'>
                    <div class='card-body'>
                        <h4 class='card-title text-center mb-5'>".$linha['nome']."</h4>
                        <h6 class='card-subtitle text-justify'>".$linha['descricao']."</h6>
                    </div>
                    <div class='card-footer bg-white border-0'>
                        <form action='' method='POST'>
                            <button class='btn btn-outline-success btn-block card-link'>
                                <label class='mr-3 mt-2'>".$linha['preco']."</label>
                                <img src='../../imagens/carrinho_p.png' alt='Carrinho de compras'>
                            </button>
                        </form>
                    </div>     
                </div>
            </div>
        ";
    }
}


?>