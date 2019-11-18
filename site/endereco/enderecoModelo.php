<?php

require '../ConnectionFactory.php';
    function inserirLocal($logradouro, $numero, $cep, $complemento, $cidade, $horario){
        
        // conexão
            $link=getConnection();

        // check connection
        if($link === false){
            die("Erro na conexão com o banco de dados." . mysqli_connect_error());
        }
        

        // insert produto
        $sql_insert_local = "INSERT INTO endereco (logradouro, numero, cep, complemento, cidade, horario) VALUES
            ('$logradouro', '$numero', '$cep', '$complemento', '$cidade', '$horario')";
    
        if(!mysqli_query($link, $sql_insert_local)){
            die( "Erro $sql_insert_local. " . mysqli_error($link));
        }
       
    }      
?>