<?php

    require "inserirModelo.php";

    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    
    session_start();


    if (inserirProduto($nome, $descricao, $preco)) {
        header("Location: ../index-admin.php");
    } 
    else {
        $erro = "Deu Ruim";        
        $_SESSION["erro"] = $erro;
        header("Location: ../index-admin.php");
    }
    
?>