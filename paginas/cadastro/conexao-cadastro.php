
<?php
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirmarsenha = $_POST["confirmarsenha"];
    echo "$nome<br/>";
    echo "$email<br/>";
    echo "$senha<br/>";
    echo "$confirmarsenha<br/>";
    echo "$telefone<br/>";
    echo "$cpf<br/>";

    // Check confirmarsenha
    if ($senha != $confirmarsenha) {    
        $erro = "As senhas não coincidem";        
        $_SESSION["erro"] = $erro;
        header("Location: cadastro.php");
        exit();
    }

    // password hash
    $hash = password_hash($senha, PASSWORD_DEFAULT);

    $link = mysqli_connect("localhost", "root", "", "kids_world_festas");
 
    // Check connection
    if($link === false){
        die("Erro na conexão com o banco de dados." . mysqli_connect_error());
    }

    // check email
    $sql_select_id = "SELECT email FROM usuario WHERE email='$email'";
    
    $result = mysqli_query($link, $sql_select_id);

    $count_email = 0;
    // mysql fetch busca uma linha, onde retorna a mesma ou retorna falso quando não há
    while ($row = mysqli_fetch_array($result)) {
        $count_email++;
    // echo "$id_usuario";
    }

    if ($count_email > 0) {
        die("E-mail já utilizado.");
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
        header("Location: login.html");
    } else{
        echo "Erro $sql. " . mysqli_error($link);
    }

    mysqli_close($link);
?>
