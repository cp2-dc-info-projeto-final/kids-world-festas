<?php

    require "ConnectionFactory.php";

    function mostrarTabela($dia) {

        $connection = getConnection();

        $sql_select_agendamentos = "SELECT nome, CPF, Email, Dia, logradouro, Cep, complemento, cidade
        FROM locacao 
        WHERE cliente.id == 
        
        $result = mysqli_query($connection, $sql_select_produtos);
        if (!$result){
            die (mysqli_error($connection));
        }
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
        

    }
?>