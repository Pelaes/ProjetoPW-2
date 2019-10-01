<?php

function buscarProdutoIndex ($tipoProd) 
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM TB_Produto WHERE tipoProd = ? AND statusProd = true");
    $sql->bind_param("s", $tipoProd);
    $sql->execute();
    $resultado = $sql->get_result();
    while ($linha = $resultado->fetch_assoc()) {
        if($resultado->num_rows > 0){
            echo '
                <div class="col-lg-3 col-sm-6">
                    <div class="card h-100">
                        <img class="card-img-top" src="'.$linha['imagemProd'].'">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-3">'.$linha['nomeProd'].'</h4>
                            <h6 class="card-subtitle text-justify mb-3">'.$linha['descricaoProd'].'</h6>
                            <form action="#" method="POST">
                                <a href="#" class="btn btn-outline-success btn-block card-link">
                                    <label class="mr-3 mt-2">R$ '. number_format($linha['precoProd'], 2, ',', '.').'</label>
                                    <img src="images/carrinho_p.png" alt="Carrinho de compras">
                                </a>
                                <input type="hidden" name="id" value="'.$linha['idProd'].'">
                            </form>
                        </div>
                    </div>
                </div>    
            ';
        }
        else{
            echo '<p class="lead">Nenhum produto encontrado nessa categoria</p>';
        }
    }
}

?>
