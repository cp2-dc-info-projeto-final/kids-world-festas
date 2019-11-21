<?php
 require "loginModel.php";
 session_start();
    $email=addslashes($_POST['email']);
    $senha=addslashes($_POST['senha']);
    $_SESSION['email']= $email;
    session_unset();
    if (autentica($email, $senha)== true){
        session_start();
        $_SESSION['email']= $email;
        header("Location:../index.php");
        exit();
    } 
    {
        
        $erro= "<p style='color:red;'>Login ou senha incorretos</p>";
        $_SESSION["erro"]=$erro;
        header("Location: ../login/loginView.php");
    }
    
?>