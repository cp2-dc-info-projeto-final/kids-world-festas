<?php

    require "../ConnectionFactory.php";

    function logar($email, $senha) {

        $connection = getConnection();

        $sql_select_usuario = "SELECT id, senha, nome FROM usuario WHERE email='$email'";
        //print_r($sql_select_usuario);
        $result = mysqli_query($connection, $sql_select_usuario);
        //print_r($result);
        if (mysqli_num_rows($result) > 0) {
            // output data pf each row
            //print_r($result);die();
            while($row = mysqli_fetch_assoc($result)) {
                
                $hash = $row["senha"];
                
                if(password_verify($senha, $hash)) {
                    //print_r('$row');die();
                    return $row;
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