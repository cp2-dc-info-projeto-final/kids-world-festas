<html>

<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css" media="screen" />
    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>     
</head>

<body>
    <center>
        <!-- Estilizar Formulário -->
        <form action="cadastroCtrl.php" method="POST">
            <h2>Cadastro</h2>
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" required="required" value="">
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="E-mail" required="required" value="">
            </p>
            <p>
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" placeholder="CPF" required="required" value="" >
            </p>
            <p>
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required="required" value="">
            </p>
            <p>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Senha" required="required" value="">
            </p>
            <p>
                <label for="confirmarsenha">Confirmar senha:</label>
                <input type="password" name="confirmarsenha" id="confirmarsenha" placeholder="Confirmar senha" required="required" value="">
            </p>
            <p>
                <input type="submit" name="enviar" value="Enviar">
            </p>
            <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "$erro";
                }
            ?>
        </form>
    </center>
</body>

</html>