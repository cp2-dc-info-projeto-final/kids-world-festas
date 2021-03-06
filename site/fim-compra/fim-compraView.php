<?php
    session_start();
    if (!isset( $_SESSION["nome"])){
        header('Location: ../login/loginView.php');
    } 
    
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Endereço</title>

    <!-- Bootstrap core CSS -->
    <link href="../../startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../../startbootstrap/css/agency.min.css" rel="stylesheet">
    <link href="../../startbootstrap/css/agency.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.php">Kids Wolrd Festas</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#agendamento">Agendamento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <!-- <div class="intro-lead-in">Seja bem-vindo ao nosso site!</div>-->
                <div class="intro-heading text-uppercase">Kids World Festas</div>
                <div class="intro-lead-in">
                    
                </div>
            </div>
        </div>
    </header>


    <form action="fim-compraCtrl.php" method="POST" enctype="multipart/form-data"> 
        <section class=" bg-light   page-section" id="produtos-inserir">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" id="agendamento">
                        <h2 class="section-heading text-uppercase">Agendamento</h2>
                        <h3 class="section-subheading text-muted">Insira os dados do agendamento.</h3>
                    </div>
                    <div class="row">
                        <br class="col-lg-12">
                        <br id="contactForm" name="sentMessage" novalidate="novalidate">


                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="logradouro" name="logradouro" type="text" placeholder="Digite o logradouro *" required="required" data-validation-required-message="Digite o nome.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="numero" name="numero" type="text" placeholder="Digite o numero *" required="required" data-validation-required-message="Digite o preço .">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="cep" name="cep" type="text" placeholder=" Digite a cep *" required="required" data-validation-required-message="Digite a descrição.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="complemento" name="complemento" type="text" placeholder=" Digite a complemento *" required="required" data-validation-required-message="Digite a descrição.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="cidade" name="cidade" type="text" placeholder=" Digite a cidade *" required="required" data-validation-required-message="Digite a descrição.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="horario" name="horario" type="time" placeholder=" Digite a hora *" required="required" data-validation-required-message="Digite a descrição.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Finalizar Compra</button>

    </form>

    

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Kids World Festas</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/LehPipocaeAlgodao">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/kids_word_festas/">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    

    <!-- Bootstrap core JavaScript -->
    <script src="../../startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="../../startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../../startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../../startbootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../../startbootstrap/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../../startbootstrap/js/agency.min.js"></script>

</body>

</html>