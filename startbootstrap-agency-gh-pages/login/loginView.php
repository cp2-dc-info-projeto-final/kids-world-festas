<html>

<head>
    <title>Cadastro</title>
    <link rel="Stylesheet" type="text/css" href="../css/main.css" media="screen" />
</head>

<body>

    <center>
        <form action="loginCtrl.php" method="POST">
            <h2>Login</h2>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" placeholder="Digite seu e-mail" name="email" id="email" value="">
            </p>
            <p>
                <label for="senha">Senha:</label>
                <input type="password" placeholder="Digite sua senha" name="senha" id="senha" value="">
            </p>
            <input type="submit" value="Entrar">
            <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "<br><b>$erro</br>";
                    session_unset();
                }
            ?>
            <p>
                    <a href="./cadastro.php">Cadastre-se</a>
            </p>
        </form>
    </center>
</body>

</html>