<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login </title>

    <!-- Bootstrap core CSS -->
    <link href="../../startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../../startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:401,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../startbootstrap/css/agency.min.css" rel="stylesheet">
    <link href="../../startbootstrap/css/agency.css" rel="stylesheet">
</head>

<body id="page-top">

    <section class="bg-light page-section" id="login">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Login</h2>
                <h3 class="section-subheading text-muted">Insira seu e-mail e sua senha para entrar.</h3>
            </div>
            <form action="loginCtrl.php" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                <center>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input class="form-control" id="email" name="email" type="text" placeholder="Digite seu e-mail *"
                                required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="senha" name="senha" type="password" placeholder="Digite sua senha *"
                                required="required" >
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </center>

                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <br>
                        <input id="login" class="btn btn-primary btn-xl text-uppercase" type="submit"
                            value="Login">
                    </div>
                    <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "<br>$erro</br>";
                    session_unset();
                }
                ?>
                </center>
            </form>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="../../startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="../../startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../../startbootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../../startbootstrap/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../startbootstrap/js/agency.min.js"></script>

    <!-- Função Verificar e Somar-->
    <script src="../../startbootstrap/js/funcao_soma.js"></script>
    <script src="../../startbootstrap/js/funcao_verificar.js"></script>
</body>

</html>