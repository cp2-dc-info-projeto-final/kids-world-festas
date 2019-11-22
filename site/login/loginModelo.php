<?php

    require "../ConnectionFactory.php";

    function logar($email, $senha) {

        $connection = getConnection();

        $sql = "SELECT
        u.id_usuario,
        u.email,
        IF (administrador.id is not null, 'administrador', 'cliente') as tipo
        FROM usuario as u
        LEFT JOIN funcionario as f ON f.id = u.id
        LEFT JOIN cliente as c ON c.id = u.id
        WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        $erro = "";
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