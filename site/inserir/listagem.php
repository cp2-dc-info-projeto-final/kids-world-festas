<?php
require_once 'ConnectionFactory.php';

function listaProdutos(){

    $link = getConnection();
    $query = "SELECT * FROM produto WHERE visibilidade = '1'";
    $produto_set = mysqli_query($link, $query);
    //print_r($query);
    //pontos concatena valor dentro da variavel

    $result = "<select name='produtos'>";
    while($produto = mysqli_fetch_assoc($produto_set)){
        $result .= "<option value='".$produto['id'] ."'>".$produto['nome'] ."</option>";
    }
    $result .= "</select>";


    return $result;
}

?>


