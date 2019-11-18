<?php
    $resultado = $_POST["resultado"];
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['resultado'] = $resultado;
    header("Location: enderecoView.php");



    require "enderecoModelo.php";

    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $cep = $_POST["cep"];
    $complemento = $_POST["complemento"];
    $cidade = $_POST["cidade"];
    $horario = $_POST["horario"];

        header("Location: ../index.php");  
?>