<?php
   
   session_start();

    // foreach ($resultado as $key => $value)
    // {
    //     echo "$key => $value <br>";
    // }       
    $resultado = $_POST;
    
    $produtos = [];
    $i = 0;
    while (isset($resultado["prodid".$i])) {

        $checked = $resultado["prod".$i];
        if ($checked == "on") {
            $produto_id = $resultado["prodid".$i];
            array_push($produtos, $produto_id);
            // echo("prodid: $produto_id");
            // echo("<BR>");
        }
        $i++;
    }
    $_SESSION['id_produtos'] = $produtos;
    $_SESSION["dia"] = $resultado["dia"];
    header("Location: fim-compraView.php");
    exit    
?>