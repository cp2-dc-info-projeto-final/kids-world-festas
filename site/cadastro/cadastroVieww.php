<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro </title>

    <!-- jQuery (Mascara) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

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

    <section class="page-section" id="login">
        <form action="cadastroCtrl.php" method="POST" enctype="multipart/form-data"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Cadastre-se</h2>
                        <h3 class="section-subheading text-muted">Cadastre-se e seja nosso cliente.</h3>
                    </div>
                    <div class="row">
                        <br class="col-lg-12">
                        <br id="contactForm" name="sentMessage" novalidate="novalidate">

                        <div class="col-md-4 col-sm-6 form-group">
                            <p>
                            <input class="form-control" id="nome" name="nome" type="text" placeholder="Digite seu nome *" required="required" data-validation-required-message="Por favor, Digite o nome.">
                            </p>
                        </div>
                        <br>
                        <div class="col-md-4 col-sm-6 form-group">
                            <p>
                            <input class="form-control" id="email" name="email" type="text" placeholder="Digite seu email *" required="required" data-validation-required-message="Por favor, Digite seu email.">
                            </p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="cep" name="cpf" type="text" placeholder="Digite seu cpf *" required="required" data-validation-required-message="Por favor, Digite seu cpf.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="complemento" name="telefone" type="text" placeholder=" Digite seu telefone *" required="required" data-validation-required-message="Por favor, Digite seu telefone.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="senha" name="senha" type="password" placeholder=" Digite sua senha *" required="required" data-validation-required-message="Por favor, Digite sua senha.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="confirmarsenha" name="confirmarsenha" type="password" placeholder=" Confirme sua senha *" required="required" data-validation-required-message="Por favor, confirme sua senha.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Cadastrar</button>
                        </div>

                        
                        <?php
                            session_start();
                            if(array_key_exists('erro', $_SESSION) == true){
                                $erro = $_SESSION["erro"];
                                echo "$erro";
                            }
                        ?>
            
        </form>
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