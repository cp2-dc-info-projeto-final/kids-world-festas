<?php

require '../ConnectionFactory.php';
   
        // remover produto
        function remove_produto($produtos){
         // conexão
         $link=getConnection();

         // check connection
         if($link === false){
             die("Erro na conexão com o banco de dados." . mysqli_connect_error());
         
     
            }
            $sql="UPDATE produto
            SET visibilidade = 0
            WHERE id=$produtos";
            mysqli_query($link, $sql);
            mysqli_close($link);
            
        }


?>        
