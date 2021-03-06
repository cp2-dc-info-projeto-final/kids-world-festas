<?php

    require '../ConnectionFactory.php';

    function finalizarCompra($logradouro, $numero, $cep, $complemento, $cidade, $horario){
        
        // conexão
            $link=getConnection();

        // check connection
        if($link === false){
            die("Erro na conexão com o banco de dados." . mysqli_connect_error());
        }
        
        // insert endereco
        $sql_insert_endereco = "INSERT INTO endereco (logradouro, numero, cep, complemento, cidade) VALUES
            ('$logradouro', '$numero', '$cep', '$complemento', '$cidade')";
    
        if(!mysqli_query($link, $sql_insert_endereco)){
            die( "Erro $sql_insert_endereco. " . mysqli_error($link));
        }
        
        //insert locacao
        $id_cliente = $_SESSION['usuario_id'];
        $dia = $_SESSION['dia'];
        //$horario = $_SESSION[''];
        $id_endereco = mysqli_insert_id($link);

        $sql_insert_locacao = "INSERT INTO `locacao`(`id_cliente`, `id_endereco`, `dia`, `horario`) VALUES
        ($id_cliente, $id_endereco, '$dia', '$horario');";

        if(!mysqli_query($link, $sql_insert_locacao)){
            die( "Erro $sql_insert_locacao. " . mysqli_error($link));
        }

        //inserir produtos
        $id_locacao = mysqli_insert_id($link);

        foreach ($_SESSION["produtos"] as $id_produto)
        {
            //SELECT preco FROM produto WHERE id = $id_produto

            
            $sql_insert_locacao_produto = "INSERT INTO locacao_produto 
                                            (`id_locacao`, `id_produto`, `preco_pago`)
                                            VALUES(`$id_locacao`, `$id_produto`, null) ";
            
            if(!mysqli_query($link, $sql_insert_locacao_produto)){
                die( "Erro $sql_insert_locacao_produto. " . mysqli_error($link));
            }
            
        }
       

    }      
?>