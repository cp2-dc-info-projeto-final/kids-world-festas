<?php

    require "ConnectionFactory.php";

    function buscarProdutos($dia) {

        $connection = getConnection();

        $sql_select_produtos = "SELECT id, nome, descricao, imagem, preco
        FROM produto 
        WHERE produto.id NOT IN (
            SELECT id_produto FROM locacao_produto JOIN locacao ON locacao_produto.id_locacao = locacao.id WHERE locacao.dia = '$dia')";
        
        $result = mysqli_query($connection, $sql_select_produtos);
        if (!$result){
            die (mysqli_error($connection));
        }
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
        

    }
?>