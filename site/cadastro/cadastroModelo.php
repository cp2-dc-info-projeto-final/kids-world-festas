<?php
    function cadastroUsuario($nome, $email, $senha){
        if ($conection === false){
            die("Falha ao conectar com o banco de dados" . mysql_connect_error());
        }
        if($conection === true){
            echo "Usuário cadastrado com sucesso."
        }
    }
    
    $sql_insert_cliente = "INSERT INTO cliente (id, telefone, cpf) VALUES
    ('$id_usuario', '$telefone', '$cpf')";

      if(mysqli_query($link, $sql_insert_cliente)){
      return true;
      } else{
      return false;

}
?>