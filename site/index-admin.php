<?php
require_once "../site/inserir/listagem.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Página do administrador</title>

    <!--Bootstrap core CSS--> 
    <link href="../startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template  -->
    <link href="../startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template  -->
    <link href="../startbootstrap/css/agency.min.css" rel="stylesheet">
    <link href="../startbootstrap/css/agency.css" rel="stylesheet">
</head>

<style>
    .tabela_agendamento {
        padding: 2px;
    }
</style>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Kids Wolrd Festas</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        
        <i class="fas fa-bars"></i>
      </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#agendamentos">Agendamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#produtos-inserir">Inserir</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#produtos-remover">Remover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#Adm-cadastrar">Cadastrar ADM's</a>
                    </li>               
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./sair.php">sair</a>
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

   

       <form action="inserir/inserirCtrl.php" method="POST" enctype="multipart/form-data"> 
        <section class="bg-light    page-section" id="produtos-inserir">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Inserir Produtos</h2>
                        <h3 class="section-subheading text-muted">Insira novos produtos no seu site.</h3>
                    </div>
                    <div class="row">
                        <br class="col-lg-12">
                        <br id="contactForm" name="sentMessage" novalidate="novalidate">


                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="nomeprod" name="nomeprod" type="text" placeholder="Digite o nome *" required="required" data-validation-required-message="Digite o nome.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="preco" name="preco" type="number" placeholder="Digite o preço *" required="required" data-validation-required-message="Digite o preço .">
                            <p class="help-block text-danger"></p>
                        </div>



                        <div class="col-md-4 col-sm-6 form-group">
                            <input class="form-control" id="descricao" name="descricao" type="text" placeholder=" Digite a descrição *" required="required" data-validation-required-message="Digite a descrição.">
                            <p class="help-block text-danger"></p>
                        </div>

                        <div class="form-group">
                            <form id="upload" method="post" enctype="multipart/form-data">
                                <ul>
                                    <li>
                                        <h4>Selecione uma imagem</h4>
                                        <input type="file" placeholder="Imagem:"  name="arquivo" required="required" accept="image/*" />
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Inserir</button>

    </form>
    </div>
    </div>




    </section>
    
     <form action="inserir/removerCtrl.php" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
      <section class=" page-section" id="main">
      
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Remover Produtos</h2>
                    </div>
                    
                   
                </div>

                 <div class="text-center">
                        
                            <?php echo listaProdutos();?>
                            
                                <button class="btn btn-danger btn-md text-uppercase" type="submit">Remover</button>
              
                    <div>
            </div>
                    
      </form>


        </section>

    <!-- Contact -->
    <section class="bg-light    page-section" id="Adm-cadastrar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Administradores</h2>
                    <h3 class="section-subheading text-muted">Cadastre novos Administradores no seu site.</h3>



                    <center>
                        <div class="col-md-6">

                            <form action="../site/cadastroadmin/cadastroadminCtrl.php" name="Adm-cadastrar" method="post">


                            <input class="form-control" id="nomeadmin" name="nomeadmin" type="text" placeholder="Digite o nome *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>



                                <input class="form-control" id="telefone" name="tel" type="text" placeholder="Digite o telefone *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>



                                <input class="form-control" id="email" type="email" name="email" placeholder="Digite o email *" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>



                                <input class="form-control" id="senha" type="password" name="senha" placeholder=" Digite a senha *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>



                                <input class="form-control" id="conf_senha" type="password" name="confirmarsenha" placeholder="Confirme sua senha *" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>


                                <br class="row">
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="agndar-button" class="btn btn-primary btn-xl text-uppercase" type="submit">Cadastrar</button>
                                </div>
                            </form>
                    </center>
                    </div>
                </div>


            </div>
        </div>
        </div>

    </section>


     <!-- Agendamentos -->
     <section class="page-section" id="agendamentos">
        <center>
            <div class="text-center">
                <h2 class="section-heading text-uppercase"> Agendamentos</h2>
                <h3 class="section-subheading text-muted"> Aqui estão os agendamentos efetuados </h3>
            </div>

            <div>
            <table style="border-collapse: collapse;" border="1">
                <tr id="linha1">
                    
                    <td class="tabela_agendamento">Código</td>
                    <td class="tabela_agendamento">Nome</td>
                    <td class="tabela_agendamento">Email</td>
                    <td class="tabela_agendamento">Telefone</td>
                    <td class="tabela_agendamento">Logradouro</td>

                    <td class="tabela_agendamento">Número</td>
                    <td class="tabela_agendamento">CEP</td>
                    <td class="tabela_agendamento">Cidade</td>
                    
                    <td class="tabela_agendamento">Data</td>
                    <td class="tabela_agendamento">Horário</td>
                    <td class="tabela_agendamento">Produto</td>
                    <td class="tabela_agendamento">Preço</td>
                    

                    
                </tr>
                <?php
                 require_once "mostrarAgendamento.php";

                 $agendamentos = buscaAgendamentos();

                 foreach ($agendamentos as $agendamento) {
                                
                ?>

                 <tr>
                 <td class="tabela_agendamento">
                 <?php echo $agendamento['id']; ?>
                </td>

                <td class="tabela_agendamento">
                 <?php echo $agendamento['nome']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['email']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['telefone']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['logradouro']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['numero']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['cep']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['cidade']; ?>
                </td>   

                <td class="tabela_agendamento">
                <?php echo $agendamento['dia']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['horario']; ?>
                </td>

                <td class="tabela_agendamento">
                <?php echo $agendamento['nomeprod']; ?>
                </td>
                
                <td class="tabela_agendamento">
                <?php echo "R$ " . number_format($agendamento['preco_pago'],2,",",".") ?>
                </td>
            </tr>
      
         <?php    
      }
    ?>

                </tr>
            </table>
        </div>
            </div>
            </div>

        </center>

    </section>



    <!-- Footer -->
    <footer class="bg-light footer">
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



    <!-- Bootstrap core JavaScript -->
    <script src="../startbootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="../startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="../startbootstrap/js/jqBootstrapValidation.js"></script>
    <script src="../startbootstrap/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../startbootstrap/js/agency.min.js"></script>

</body>

</html>