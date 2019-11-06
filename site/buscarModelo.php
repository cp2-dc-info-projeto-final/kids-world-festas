<?php

    require "ConnectionFactory.php";

    function buscarProdutos($dia) {

        $connection = getConnection();

        $sql_select_produtos = "SELECT produto.nome
        FROM locacao
        INNER JOIN locacao_produto ON locacao.id = locacao_produto.id_locacao
        INNER JOIN produto ON produto.id = locacao_produto.id_produto
        WHERE locacao.dia = '$dia'";
        $produtos_indisponiveis=[];
        $result = mysqli_query($connection, $sql_select_produtos);
        while($row=mysqli_fetch_assoc($result)){
            $produto['nome']=$row['nome'];
            array_push($produtos_indisponiveis, $produto);
        }
        foreach ($produtos_indisponiveis as $p){
            echo $p['nome']."<br>";
        }

    }
?>