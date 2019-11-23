<?php
    session_start();
    require "loginModelo.php";

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    
    

    if ($usuario = logar($email, $senha)) {
        //print
        //session_unset();
        
        $_SESSION["nome"] = $usuario["nome"];
        $_SESSION["usuario_id"] = $usuario["id"];
        $_SESSION["admin"]= administrador($email);
        if ($_SESSION["admin"]==true){
            header("Location: ../index-admin.php");
            } else if ($_SESSION["admin"]==false){
                header("Location: ../index.php");
            }
    
       
        exit();
    }
    else {
        echo administrador($email);
        /*$erro = "Login ou senha incorretos";
        $_SESSION["erro"] = $erro;
        header("Location: loginView.php");
        exit();*/
    }
?>