<html>

<head>
   
    <title>Cadastro</title>
    <link href="css/agency.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/main.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="../css/agency.min.css" media="screen" />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>     
</head>

<body id= "cadastro">
    
    <center>
        <!-- Estilizar Formulário -->
        <section class="bg-light page-section" id="contact">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h2 class="section-heading text-uppercase">Cadastro</h2>
                      <h3 class="section-subheading text-muted">Cadastre um administrador</h3>
                  </div>
                 </div>

                  <div class="row">
                    <div class="col-lg-12">
                      <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                          
                            <div class="form-group">
                             <input class="form-control" id="nome" type="text" placeholder="Digite seu nome *" required="required" data-validation-required-message="Digite seu nome.">
                              <p class="help-block text-danger"></p>
                             </div>
                            <div class="form-group">
                               <input class="form-control" id="Email" type="email" placeholder="Digite seu E-mail *" required="required" data-validation-required-message="Digite seu E-mail.">
                              <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="form-group">
                              <input class="form-control" id="senha" type="password" placeholder=" Digite sua senha *" required="required" data-validation-required-message="Digite sua senha.">
                              <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                    <input class="form-control" id="conf_senha" type="password" placeholder="Confirme sua senha *" required="required" data-validation-required-message="Confirme sua senha.">
                                    <p class="help-block text-danger"></p>
                                  </div>
                                  <div class="clearfix"></div>
                                  <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                  <  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Cadastrar</button>
                                  </div>
                                </div>
                                  
                <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "$erro";
                }
            ?>
        </form>
        

        
        js/jqBootstrapValidation.js
 <!-- Contact form JavaScript -->
 <script src="../../startbootstrap/js/jqBootstrapValidation.js"></script>
 <script src="../../startbootstrap/js/contact_me.js"></script>        
</body>

</html>