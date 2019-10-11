<?php

    require "loginModelo.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    session_start();

    if (logar($email, $senha) == true) {
        session_unset();
        $_SESSION["nome"] = $row["nome"];
        header("Location: ../index-usuario.php");
        exit();
    }
    else {
        $erro = "Login ou senha incorretos";
        $_SESSION["erro"] = $erro;
        header("Location: ../index.php");
        exit();
    }
?>