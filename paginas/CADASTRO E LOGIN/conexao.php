
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

    // check email
    $sql_select_id = "SELECT email FROM usuario WHERE email='$email'";
    
    $result = mysqli_query($link, $sql_select_id);

    $count_email = 0;
    // mysql fetch busca uma linha ou retorna falso quando não há
    while ($row = mysqli_fetch_array($result)) {
        $count_email++;
       // echo "$id_usuario";
    }

    if ($count_email > 0) {
        die("E-mail não disponível");
    }

    // insert usuario
    $sql_insert_usuario = "INSERT INTO usuario (nome, email, senha) VALUES
            ('$nome', '$email', '$senha')";

    if(mysqli_query($link, $sql_insert_usuario)){
        echo "Cadastro Concluído <br/>";
    } else{
        echo "Erro $sql. " . mysqli_error($link);
    }

    // select pegando o id inserido, filtrando WHERE com email
    $sql_select_id = "SELECT id FROM usuario WHERE email='$email'";

    $result = mysqli_query($link, $sql_select_id);

    $id_usuario = null;
    while ($row = mysqli_fetch_array($result)) {
        $id_usuario = $row[0];
       // echo "$id_usuario";
    }

    // insert cliente
    $sql_insert_cliente = "INSERT INTO cliente (id, telefone, cpf) VALUES
            ($id_usuario, '$telefone', '$cpf')";
    
    if(mysqli_query($link, $sql_insert_cliente)){
        echo "Cadastro Concluído";
    } else{
        echo "Erro $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>
