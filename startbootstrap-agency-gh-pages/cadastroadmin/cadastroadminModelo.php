<?php
    function cadastrarAdministrador($nome, $email, $senha){
        
        // conexão
        $link = mysqli_connect("localhost", "root", "", "kids_world_festas");

        // check connection
        if($link === false){
            die("Erro na conexão com o banco de dados." . mysqli_connect_error());
        }
        
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

        // select pegando o id inserido, filtrando WHERE com email
        $sql_select_id = "SELECT id FROM usuario WHERE email='$email'";

        $result = mysqli_query($link, $sql_select_id);

        $id_usuario = null;
        // "Obtem uma linha do resultado como uma matriz associativa, numérica, ou ambas" Site: https://www.php.net/manual/pt_BR/mysqli-result.fetch-array.php
        while ($row = mysqli_fetch_array($result)) {
            $id_usuario = $row[0];
        }

        // insert administrador
        $sql_insert_administrador = "INSERT INTO administrador (id) VALUES
        ('$id_usuario')";

        if(mysqli_query($link, $sql_insert_administrador)){
            return true;
            
        }
        else{
            die( "Erro $sql_insert_usuario. " . mysqli_error($link));
        }

        mysqli_close($link);
    }
?>