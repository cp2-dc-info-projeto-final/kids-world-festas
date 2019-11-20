<?php
    
    require "buscarModelo.php";

    function buscarProdutosCtrl($dia) {
        if (is_null($dia))
            return [];
            
        // if ($dia < date('Y-m-d') and $dia != [])
        //     echo "esta busca não é permitida";
        //     die;
        return buscarProdutos($dia);
    }
?>