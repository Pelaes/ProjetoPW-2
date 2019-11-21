<?php

function buscarProdutoIndex ($busca) 
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Produto WHERE nome LIKE ?");
    $busca = "%".$busca."%";
    $sql->bind_param("s", $busca);
    $sql->execute();
    $resultado = $sql->get_result();
    $retornoProdutos = "";
    
        if($resultado->num_rows > 0){
            while ($linha = $resultado->fetch_assoc()) {
                $retornoProdutos .= 
                    '<div class="col-lg-4 col-sm-6">
                        <div class="card h-100 border-0">
                            <img class="mx-auto img-fluid w-100 h-100 rounded-circle" src="../../imagens/'.$linha['foto'].'">
                            <div class="card-body">
                                <a class="card-link" href="../../controller/buscaAlteracao.php?id='.$linha['idProduto'].'"><h4 class="card-title text-center mb-3">'.$linha['nome'].'</h4></a>
                                <h6 class="card-title text-center mb-3">'.$linha['preco'].'</h6>
                            </div>
                        </div>
                    </div>    
                ';
            }
        }
        else{
            $retornoProdutos .= "ErroNaoExiste";
        }
    
    echo $retornoProdutos;
}

function buscarProdutoAlteracao ($busca) 
{
    include "conexao.php";

    $sql = $conn->prepare("SELECT * FROM Produto WHERE idProduto = ?");
    $sql->bind_param("s", $busca);
    $sql->execute();
    $resultado = $sql->get_result();
    $retornoProdutos = "";
    
        if($resultado->num_rows > 0){
            while ($linha = $resultado->fetch_assoc()) {
                echo $linha['idProduto'];
                echo "<br><br>";
                echo $linha['foto'];
                echo "<br><br>";
                echo $linha['nome'];
                echo "<br><br>";
                echo $linha['descricao'];
                echo "<br><br>";
                echo $linha['preco'];
                echo "<br><br>";
            }
        }
        else{
            $retornoProdutos .= "ErroNaoExiste";
        }
    
    echo $retornoProdutos;
}
?>
