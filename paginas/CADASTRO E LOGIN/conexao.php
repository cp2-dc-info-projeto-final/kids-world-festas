
<?php
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    echo "$nome<br/>";
    echo "$email<br/>";
    echo "$senha<br/>";
    echo "$telefone<br/>";
    echo "$cpf<br/>";

    $link = mysqli_connect("localhost", "root", "", "kids_world_festas");
 
    // Check connection
    if($link === false){
        die("Erro" . mysqli_connect_error());
    }

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES
            ('$nome', '$email', '$senha')";
     
     $sql = "INSERT INTO cliente (telefone, cpf) VALUES
            ('$telefone', '$cpf')";

    if(mysqli_query($link, $sql)){
        echo "Cadastro Concluído";
    } else{
        echo "Erro $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>
