<?php
 function Cadastra_Usuario($nome, $email, $senha){
    include_once "../conexao.php";
  // conexão
  $link=getConnection();

  // check connection
  if($link === false){
      die("Erro na conexão com o banco de dados." . mysqli_connect_error());
  }
    $sql="SELECT id FROM usuario WHERE email='$email'";
    $result=mysqli_query($conn, $sql);
    
    $hash= password_hash($senha, PASSWORD_DEFAULT);
    if (mysqli_num_rows($result)>0){
        return false;
    } 
    $sql="INSERT INTO usuario (nome, email, senha, moderador) VALUES ('$nome', '$email', '$hash', false)";
    if (!mysqli_query($conn, $sql)) {
        die("Erro ao efetuar o cadastro" . mysqli_error($conn));
        
    } else {
        $id=mysqli_insert_id($conn);
        mysqli_close($conn);
        return $id;
    }
    
  
 }
 function Usuario_Genero($id_usuario, $id_genero){
    include_once "../conexao.php";
    $conn=get_connection();
   
       if($conn===false){
           die("Falha na conexão". mysqli_connect_error($conn));
    }
    $sql="INSERT INTO genero_usuario(id_usuario, id_genero) VALUES ($id_usuario, $id_genero)";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
 }
 function Limpa($id){
    include_once "../conexao.php";
    $conn=get_connection();
   
       if($conn===false){
           die("Falha na conexão". mysqli_connect_error($conn));
    }
    $sql="DELETE FROM genero_usuario WHERE id_usuario=$id";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
 }
 ?>