<?php
    function inserirProduto($nome, $descricao, $preco){
        
        // conexão
        $link = mysqli_connect("localhost", "root", "", "kids_world_festas");

        // check connection
        if($link === false){
            die("Erro na conexão com o banco de dados." . mysqli_connect_error());
        }
        

        // insert produto
        $sql_insert_produto = "INSERT INTO produto (nome, descricao, preco) VALUES
            ('$nome', '$descricao', '$preco')";
    
        if(!mysqli_query($link, $sql_insert_produto)){
            die( "Erro $sql_insert_produto. " . mysqli_error($link));
        }

    }      
?>