<?php

    require "../ConnectionFactory.php";

    function logar($email, $senha) {

        $connection = getConnection();

        $sql_select_usuario = "SELECT senha, nome FROM usuario WHERE email='$email'";

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
        mysqli_close($connection);
    }
?>