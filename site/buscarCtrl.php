<?php
    
    require "buscarModelo.php";

    function buscarProdutosCtrl($dia) {
        if (is_null($dia))
            return [];

        return buscarProdutos($dia);
    }
?>
