<?php

    function getConnection() {

        $link = mysqli_connect("localhost", "root", "", "kids_world_festas");

        // check connection
        if($link === false){
            die("Erro na conexão com o banco de dados." . mysqli_connect_error());
        }

        return $link;

    }

?>