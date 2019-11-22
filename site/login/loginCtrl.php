<?php
//session_start();
    require "loginModelo.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    /*print_r($_POST["email"]);echo"<br>";
    print_r($_POST["senha"]);die();*/

    

    if ($usuario = logar($email, $senha)) {
        //print
        //session_unset();
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["usuario_id"] = $usuario["id"];
        //print_r($_SESSION);die();
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