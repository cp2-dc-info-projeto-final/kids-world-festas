<?php
session_start();
require "cadastroModel.php";
$nome =addslashes($_POST['nome']);
$email =addslashes($_POST['email']);
$telefone =addslashes($_POST['telefone']);
$cpf =addslashes($_POST['cpf']);
$senha = addslashes($_POST['senha']);
$confirmarsenha =addslashes($_POST['confirmarsenha']);


if ($senha != $confirmasenha) {    
    $erro = "<p style='color:red;'>As senhas não coincidem.</p>";        
   $_SESSION['erro']=$erro;
   header ("Location:cadastroView.php");
    exit();
}

    $resposta=Cadastra_Usuario($nome, $email, $senha, $telefone, $cpf);
if ($resposta==false){
    $erro="<p style='color:red;'>E-mail indisponível</p>";
    $_SESSION["erro"]= $erro;
    header ("Location:../Login/loginVieww.php");
    exit();
    
} 
else {
    header("Location:../Login/loginView.php");
}
