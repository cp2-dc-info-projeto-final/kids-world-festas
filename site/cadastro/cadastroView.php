<html>

<head>
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
</head>

<body>
    <header class="menu-principal">
        <main>
            <div class="header-1">
                <div class="logo">
                    <a href="./index.html">
                        <img src="./img/logo-p1.png" />
                    </a>
                </div>
                <div class="redes-sociais">
                    <!-- Direito dos usos dos icons <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"             title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"             title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div> -->
                    <ul>
                        <li>
                            <a href="#">
                                <img src="./img/instagram.png" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/email.png" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/facebook.png" />
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/whatsapp.png" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </header>
    <main class="main100 menus">
        <div class="header-2">
            <div class="menu">
                <ul>
                    <li>
                        <a href="./index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Produtos</a>
                    </li>
                    <li>
                        <a href="#">Quem Somos</a>
                    </li>
                    <li>
                        <a href="#">Contato</a>
                    </li>
                </ul>
            </div>
            <div class="sign">
                <ul>
                    <li>
                        <a href="./login.php">Sign In</a>
                    </li>
                    <li>
                        <a href="./cadastro.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>
    <center>
        <!-- Estilizar Formulário -->
        <form action="conexao-cadastro.php" method="POST">
            <fieldset>
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
                    <input type="text" name="cpf" id="cpf" placeholder="CPF" required="required" value="">
                </p>
                <p>
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" placeholder="Telefone" required="required" value="">
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
            </fieldset>
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