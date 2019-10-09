<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col offset-s4 s4">
            <div class="card light-blue lighten-3">
                <form action="./login/loginCtrl.php" method="POST">
                    <h2>Login</h2>
                        <div class="input-field col s6">
                            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <p>
                            <label for="email">E-mail:</label>
                            <input type="text" placeholder="Digite seu e-mail" name="email" id="email" value="">
                        </p>
                        <p>
                            <label for="senha">Senha:</label>
                            <input type="password" placeholder="Digite sua senha" name="senha" id="senha" value="">
                        </p>
                        <input class="btn" type="submit" value="Entrar">
                        <?php
                                        session_start();
                                        if(array_key_exists('erro', $_SESSION) == true){
                                            $erro = $_SESSION["erro"];
                                            echo "<br><b>$erro</br>";
                                            session_unset();
                                        }
                                    ?>
                        <p>
                            <a style="color: #fff59d" href="./cadastro/cadastroView.php">Cadastre-se</a>
                        </p>
                </form>
            </div>


        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</body>

</html>