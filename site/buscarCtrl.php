<?php
    
    require "buscarModelo.php";

    function buscarProdutosCtrl($dia) {
        //print_r($dia);die();
        if (is_null($dia))
            return [];
            
        // if ($dia < date('Y-m-d') and $dia != [])
        //     echo "esta busca não é permitida";
        //     die;
        return buscarProdutos($dia);
    }
?>