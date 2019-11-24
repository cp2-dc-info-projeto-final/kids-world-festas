<?php

    require "inserirModelo.php";

    $nome = $_POST["nomeprod"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];
    $imagem = $_FILES["arquivo"]["name"];

    session_start();


    $id=(inserirProduto($nome, $descricao, $preco, $imagem)); 
        mkdir('../img/produtos/'.$id.'/', 755, true);
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], '../img/produtos/'.$id.'/'.$imagem);
        header("Location: ../index-admin.php");  
?>