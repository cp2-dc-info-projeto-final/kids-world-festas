<?php

    require "fim-compraModelo.php";

    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $cep = $_POST["cep"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $horario = $_POST["horario"];
    
    finalizarCompra($logradouro, $numero, $cep, $complemento, $cidade, $horario)
?>