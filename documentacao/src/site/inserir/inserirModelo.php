<?php

require '../ConnectionFactory.php';
    function inserirProduto($nome, $descricao, $preco, $imagem, $visibilidade){
        
        // conexão
            $link=getConnection();

        // check connection
        if($link === false){
            die("Erro na conexão com o banco de dados." . mysqli_connect_error());
        }
        

        // insert produto
        $sql_insert_produto = "INSERT INTO produto (nome, descricao, preco, imagem, visibilidade) VALUES
            ('$nome', '$descricao', '$preco', '$imagem', 1)";
    
        if(!mysqli_query($link, $sql_insert_produto)){
            die( "Erro $sql_insert_produto. " . mysqli_error($link));
        }
        $id=mysqli_insert_id($link);
       $sql="UPDATE produto  SET imagem='img/produtos/$id/$imagem' WHERE id=$id";
       if (!mysqli_query($link, $sql)){
           die(mysqli_error($link));
       } 
        return $id;
    }      
?>