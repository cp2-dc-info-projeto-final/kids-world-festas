<?php

    require "../ConnectionFactory.php";

    function cadastrarUsuario($nome, $email, $senha) {
        // conexão
        $link = getConnection();
        
        // check email
        $sql_select_id = "SELECT email FROM usuario WHERE email='$email'";
    
        $result = mysqli_query($link, $sql_select_id);

        $count_email = 0;
        // mysql fetch busca uma linha, onde retorna a mesma ou retorna falso quando não há
        while ($row = mysqli_fetch_array($result)) {
            $count_email++;
        // echo "$id_usuario";
        }

        if ($count_email > 0) {
            return false;
        }

        // password hash
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        // insert usuario
        $sql_insert_usuario = "INSERT INTO usuario (nome, email, senha) VALUES
            ('$nome', '$email', '$hash')";
    
        if(!mysqli_query($link, $sql_insert_usuario)){
            die( "Erro $sql_insert_usuario. " . mysqli_error($link));
        }

        $id_usuario = mysqli_insert_id($link);

        mysqli_close($link);

        return $id_usuario;

    }

    function cadastrarCliente($nome, $email, $senha, $telefone, $cpf){
        
        $id_usuario = cadastrarUsuario($nome, $email, $senha);

        $link = getConnection();

        // insert cliente
        $sql_insert_cliente = "INSERT INTO cliente (id, telefone, cpf) VALUES
        ($id_usuario, '$telefone', '$cpf')";

        if(!mysqli_query($link, $sql_insert_cliente)){
            die( "Erro $sql_insert_cliente. " . mysqli_error($link));
        }

        mysqli_close($link);

        return true;
    }
    
    function cadastrarAdministrador($nome, $email, $senha){
        
        $id_usuario = cadastrarUsuario($nome, $email, $senha);

        $link = getConnection();

        // insert cliente
        $sql_insert_cliente = "INSERT INTO administrador (id) VALUES
        ($id_usuario)";

        if(mysqli_query($link, $sql_insert_cliente)){
            return true;
            
        }
        else{
            die( "Erro $sql_insert_usuario. " . mysqli_error($link));
        }

        mysqli_close($link);
    }
?>