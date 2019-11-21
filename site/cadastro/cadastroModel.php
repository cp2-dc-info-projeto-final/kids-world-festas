<?php

 require "../ConnectionFactory.php";
 function cadastrarUsuario($nome, $email, $senha, $telefone, $cpf) {
     // conexão
     $link = getConnection();

  // check connection
  if($link === false){
      die("Erro na conexão com o banco de dados." . mysqli_connect_error());
  }
    $sql="SELECT id FROM usuario WHERE email='$email'";
    $result=mysqli_query($link, $sql);
    
    $hash= password_hash($senha, PASSWORD_DEFAULT);
    if (mysqli_num_rows($result)>0){
        return false;
    } 
    $sql="INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$hash')";
    if (!mysqli_query($link, $sql)) {
        die("Erro ao efetuar o cadastro" . mysqli_error($link));

      
        
    } else {
        $id=mysqli_insert_id($link);
        mysqli_close($link);
        return $id;
    }
    
  
 }




 function Limpa($id){
    include_once "../conexao.php";
    $conn=get_connection();
   
       if($conn===false){
           die("Falha na conexão". mysqli_connect_error($conn));
    }
 }
 ?>