<html>

<head>

    <title>Login</title>
    <link href="../../startbootstrap/css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/agency.min.css" media="screen" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
</head>

<body id="cadastro">

    <center>
        <!-- Estilizar Formulário -->
        <section class="bg-light page-section" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Login</h2>
                        <h3 class="section-subheading text-muted">Seja Bem vindo novamente.</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">


                            <form action="loginCtrl.php" method="POST" id="contactForm" name="sentMessage"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" id="email" type="text"
                                                placeholder="Digite seu email *" required="required"
                                                data-validation-required-message="Por favor, digite seu email.">
                                            <p class="help-block text-danger"></p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="senha" type="password"
                                                placeholder="Digite sua senha *" required="required"
                                                data-validation-required-message="Por favor, digite sua senha.">
                                            <p class="help-block text-danger"></p>
                                        </div>

                                        <div class="clearfix"></div>
                                        <div class="col-lg-12 text-center">
                                            <div id="success"></div>
                                            <br>
                                            <input id="Buscprodutos" class="btn btn-primary btn-xl text-uppercase"
                                                type="submit" value="Login">
                                        </div>
                                    </div>
                                </div>
                                <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "<br><b>$erro</br>";
                    session_unset();
                }
            ?>
                                <p>
                                    <a href="./cadastro/cadastroView.html">Cadastre-se</a>
                                </p>
                            </form>
    </center>
    <!-- Contact form JavaScript -->
    <script src="../../startbootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../../startbootstrap/js/contact_me.js"></script>
</body>

</html>