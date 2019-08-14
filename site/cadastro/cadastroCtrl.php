<?php

    require "cadastroModelo.php";

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
        header("Location: cadastroView.php");
        exit();
    }

    // Check confirmarsenha
    if ($senha != $confirmarsenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
        exit();
    }

    $erro = "";

    if (cadastrarUsuario($nome, $email, $senha, $telefone, $cpf)) {
        header("Location: ../autenticacao/loginView.php");
    } 
    else {
        $erro = "Email indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastroView.php");
    }
    
?>