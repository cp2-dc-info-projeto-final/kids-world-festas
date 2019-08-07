<html>

<head>
    <title>Cadastro</title>
    <link rel="Stylesheet" type="text/css" href="css/main.css" media="screen" />
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
        <form action="loginCtrl.php" method="POST">
            <fieldset>
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
            </fieldset>
        </form>
    </center>
</body>

</html>