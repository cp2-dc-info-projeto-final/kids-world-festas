<?php

    require "cadastroadminModelo.php";

    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarsenha = $_POST["confirmarsenha"];

    session_start();

    if(!preg_match("/^([a-zA-Z' ]+)$/",$nome)){
        $erro = "Seu nome tá errado mané!";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroadminView.php");
        exit();
    }

    // Check confirmarsenha
    if ($senha != $confirmarsenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroadminView.php");
        exit();
    }

    $erro = "";

    if (cadastrarAdministrador($nome, $email, $senha)) {
        header("Location: ../index.php");
    } 
    else {
        $erro = "Email indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroadminView.php");
    }
    
?>