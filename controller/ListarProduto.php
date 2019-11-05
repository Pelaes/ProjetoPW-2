<?php

    $pagina="listarproduto.php"; //aqui colocariamos o nome da pagina.
    if(basename($_SERVER["PHP_SELF"]) == $pagina){
    die("<script>alert('Sem permição de acesso !')</script>\n<script>window.location=('../index.php')</script>");
    // echo "caraio";
    // die();
    }

    function ValidarBusca()
    {
        include "model/produtoModel.php";
        buscarProdutos();
        //echo "teste";
    }

?>