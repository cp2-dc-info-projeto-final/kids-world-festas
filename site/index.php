<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
//print_r($_SESSION);die();
?>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kids World Festas </title>

    <!-- Bootstrap core CSS -->
    <link href="../startbootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:401,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../startbootstrap/css/agency.min.css" rel="stylesheet">
    <link href="../startbootstrap/css/agency.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Kids Wolrd Festas</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">                   
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#busc-data">Agendamento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./login/loginView.php">login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="./cadastro/cadastroVieww.php">Cadastre-se</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Seja bem-vindo ao nosso site!</div>
                <div class="intro-heading text-uppercase">Kids World Festas</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#busc_data">Agendar</a>
            </div>
        </div>
    </header>

    <!-- Busc-Data -->
    <section class="bg-light page-section" id="busc-data">
        <div class="container">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">
                    Busque sua data
                </h2>
                <h3 class="section-subheading text-muted">
                    Busque a data do seu evento e serão indicados os produtos
                    disponíveis à data selecionada.
                </h3>
            </div>

            <body id="page-top">
                <section class="bg-light page-section" id="portfolio">

                    <div class="col-lg-12">
                        <form name="Buscprodutos" action="#busc-data" method="GET">
                            <center>
                                <div class=" col-sm-6 form-group">
                                    Data: <input class="form-control" id="data" name="dia" type="date"
                                        placeholder="Data do evento *" required="required"
                                        data-validation-required-message="Por favor, digite a data do evento.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </center>

                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <br>
                                <input id="Buscprodutos" class="btn btn-primary btn-xl text-uppercase" type="submit"
                                    value="Buscar">
                            </div>

                        </form>
                    </div>

                    <br>
                    <br>
                    <br>
                    <br>

                    <div class="col-sm-12">
                    <form action="fim-compra/guardarProdutosSelecionados.php" method="POST">
                        <h1 class="section-subheading text-muted text-center "">
                            Os produtos disponíveis nessa data são:
                        </h1>

                        <br>
                        <br>

                        <?php
        
                        require_once "buscarCtrl.php";
        
                        $dia = null;
        
                        if (isset($_GET['dia']))
                            $dia = $_GET['dia'];

                            // if ($dia < date('Y-m-d') and $dia != [])
                            // echo "esta busca não é permitida";
                            // die;
                        echo "<input type=\"hidden\" name=\"dia\" value=\"".$dia."\"/>";
                        $produtos = buscarProdutosCtrl($dia);
        
                        $i = 0;
                        foreach ($produtos as $produto) {
        
                        
                    ?>
                        <!-- Modal 1 -->
                        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="close-modal" data-dismiss="modal">
                                        <div class="lr">
                                            <div class="rl"></div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-8 mx-auto">
                                                <div class="modal-body">
                                                    <!-- Project Details Go Here -->
                                                    <h2 class="text-uppercase"><?php echo $produto['nome'];?></h2>

                                                    <img class="img-fluid d-block mx-auto"
                                                        src="<?php echo $produto['imagem'];?>" />
                                                    <p> <?php echo $produto['imagem'];?></p>

                                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                        <i class="fas fa-times"></i>
                                                        Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                    </div>
                                </div>
                                <img class="img-fluid" src="<?php echo $produto['imagem'];?>" />
                            </a>
                            <div class="portfolio-caption">
                                <h4>
                                    
                                    <input type="checkbox" onclick="soma(<?php echo $i;?>)"
                                        name="<?php echo "prod".$i;?>">
                                    <?php echo $produto['nome'];?>

                                    <input type="hidden" name="<?php echo "prodid".$i;?>"
                                        value="<?php echo $produto['id'];?>">

                                    <input type="hidden" name="<?php echo "preco".$i;?>"
                                        value="<?php echo $produto['preco'];?>"></h4>

                                <p class="text-muted"> R$<?php echo $produto['preco'];?>,00</p>
                            </div>
                        </div>


                        <?php
                        $i++;
                    }
                    ?>
                    </div>
        </div>
        
            <div>
                <center>
                    <div class="DivTotal">
                        Total: <input type="text" id="resultado" name="resultado" readonly=“true” value="0" ;>
                    </div>
                        
            
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <br>
                    <input id="agendar" class="btn btn-primary btn-xl text-uppercase"
                        type="submit" value="agendar">
                </div>
                </center>
            </div>
        </form>
    </div>
    </section>



        </div>
    </section>

    <!-- About -->
    <section class="page-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Sobre</h2>
                    <h3 class="section-subheading text-muted">Conheça um pouco da nossa história</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about1.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2016</h4>
                                    <h4 class="subheading"> O início</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">A história da empresa teve início em 2016, quando fizemos
                                        nossa primeira festa com algodão doce e pipoqueira de cinema.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about2.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"> Mudanças </h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Houveram muitas mudanças desde a nossa primeira festa.
                                        Compramos mais equipamentos e hoje nossa empresa tem 7 máquinas e 1 brinquedo.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="img/about3.jpeg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4 class="subheading"> Seja parte do nosso mundo </h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Nosso objetivo é sempre trazer a alegria, sabor e diversão ao
                                        seu evento, fazendo com que ele se torne único e especial. Deixe-nos fazer parte
                                        do seu mundo! Agende sua data.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">

                                <h4>Agende
                                    <br>sua
                                    <br>Data!</h4>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Kids World Festas 2019</span>
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

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase"><?php echo $produto['nome'];?></h2>

                                <img class="img-fluid d-block mx-auto" src="<?php echo $produto['imagem'];?>" />
                                <p> Estação de algodão doce para até 100 pessoas</p>
                                <ul class="list-inline">
                                    <li><?php echo $produto['descricao'];?></li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










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

    <!-- Função Verificar e Somar-->
    <script src="../startbootstrap/js/funcao_soma.js"></script>
    <script src="../startbootstrap/js/funcao_verificar.js"></script>
</body>

</html>