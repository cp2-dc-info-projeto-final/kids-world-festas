<?php

    require "loginModelo.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    session_start();

    if ($usuario = logar($email, $senha) != false) {
        session_unset();
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["usuario_id"] = $usuario["id"];
        header("Location: ../index.php");
        exit();
    }
    else {
        $erro = "Login ou senha incorretos";
        $_SESSION["erro"] = $erro;
        header("Location: loginVieww.php");
        exit();
    }
?>