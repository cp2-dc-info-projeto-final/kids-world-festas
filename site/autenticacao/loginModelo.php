<?php

    function logar($email, $senha) {

        $connection = mysqli_connect("localhost", "root", "", "kids_world_festas"); 

        // Check connection
        if($connection === false){
            die("Erro de conexão" . mysqli_connect_error());
        }

        $sql_select_usuario = "SELECT senha, nome FROM usuario email='$email'";

        $result = mysqli_query($connection, $sql_select_usuario);
        
        if (mysqli_num_rows($result) > 0) {
            // output data pf each row
            while($row = mysqli_fetch_assoc($result)) {
                $hash = $row["senha"];

                if(password_verify($senha, $hash)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
        mysqli_close($connection)
    }
?>