<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $connection = mysqli_connect("localhost", "root", "", "kids_world_festas");
 
    // Check connection
    if($connection === false){
        die("Erro de conexão" . mysqli_connect_error());
    }
    session_start();
    
    $sql = "SELECT senha, nome FROM usuario WHERE email='$email'";
    $result = mysqli_query($connection, $sql);
    $erro = "";
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $hash = $row["senha"];
            if (password_verify($senha, $hash)) {
                session_unset();
                $_SESSION["nome"] = $row["nome"]; 
                header("Location: perfil.php");
                exit();
            } else {
                $erro = "Senha incorreta";        
                $_SESSION["erro"] = $erro;
                header("Location: login.php");
                exit();
            }
        }
    } else {
        $erro = "Login inexistente";
        $_SESSION["erro"] = $erro;
        header("Location: login.php");
        exit();
    }        
    mysqli_close($connection);
    
?>