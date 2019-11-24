<?php

    require "cadastroadminModelo.php";
    //session_start();

    $nome = $_POST["nomeadmin"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarsenha = $_POST["confirmarsenha"];

    session_start();

    if(!preg_match("/^([a-zA-Z' ]+)$/",$nome)){
        $erro = "Nome inválido";        
        $_SESSION["erro"] = $erro;
        header("Location: index-admin.php");
        exit();
    }

    // Check confirmarsenha
    if ($senha != $confirmarsenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: index-admin.php");
        exit();
    }

    $erro = "";

    if (cadastrarAdministrador($nome, $email, $senha)) {
        header("Location: ../index-admin.php");
    } 
    else {
        $erro = "Email indisponível";        
        $_SESSION["erro"] = $erro;
        header("Location: index-admin.php");
    }
    
?>