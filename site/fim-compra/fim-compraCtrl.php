<?php

    require "fim-compraModelo.php";

    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $cep = $_POST["cep"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $horario = $_POST["horario"];

    session_start();

    $id_cliente = $_SESSION['usuario_id'];
    
    $dia = $_SESSION['dia'];

    finalizarCompra($id_cliente, $dia, $logradouro, $numero, $cep, $complemento, $cidade, $horario)
?>