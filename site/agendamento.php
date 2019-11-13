<!DOCTYPE html>

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
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../startbootstrap/css/agency.min.css" rel="stylesheet">
    <link href="../startbootstrap/css/agency.css" rel="stylesheet">

</head>

<body id="page-top">
    <section class="bg-light page-section" id="portfolio">

            <div class="col-lg-12">
                <form name="Buscprodutos" action="agendamento.php" method="GET">
                    <div class="row">


                        <div class=" col-sm-6 form-group">
                            Data: <input class="form-control" id="data" name="dia" type="date" placeholder="Data do evento *" required="required" data-validation-required-message="Por favor, digite a data do evento.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class=" col-md-6 form-group">
                            <!--Horário: <input class="form-control" id="horario" type="time" name="hora" placeholder="Horário do evento *" required="required" data-validation-required-message="Por favor, digite o horário do evento.">
                            <p class="help-block text-danger"></p>-->
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <br>
                            <input id="Buscprodutos" class="btn btn-primary btn-xl text-uppercase" type="submit" value="Buscar">
                        </div>
                    </div>
                </form>
            </div>

        <div class="col-md-6">
            <h1 class="section-subheading text-muted">Os produtos disponíveis nessa data são:</h1>

            <?php

                require_once "buscarCtrl.php";

                $dia = null;

                if (isset($_GET['dia']))
                    $dia = $_GET['dia'];

                
                $produtos = buscarProdutosCtrl($dia);

                $i = 0;
                foreach ($produtos as $produto) {

                
            ?>
                <input type="checkbox" name="<?php echo "prod".$i;?>" value="<?php echo $produto['id'];?>"> <?php echo $produto['nome'];?><br>
                <input type="hidden" name="<?php echo "preco".$i;?>" value="<?php echo $produto['preco'];?>">
                <img src="<?php echo $produto['imagem'];?>"/> 
            <?php
                $i++;
            }
            ?>
        </div>
        <div class="col-sm-3 form-group">
            Total<label class="form-control" id="total" type="number" aria-placeholder="total"></label>
        </div>

        <div class="col-sm-6">
            <h1 class="section-subheading text-muted">Indique o endereço do evento</h1>
            <div class="form-group">
                Logradouro: <input class="form-control" id="endereco" type="text" placeholder="Digite o endereço do evento *" required="required" data-validation-required-message="Por favor, digite o endereço do evento.">
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                CEP: <input class="form-control" id="Bairro" type="text" placeholder="Digite o bairro do evento *" required="required" data-validation-required-message="Por favor, digite o bairro do evento.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                Complemento: <input class="form-control" id="Bairro" type="text" placeholder="Digite o bairro do evento *" required="required" data-validation-required-message="Por favor, digite o bairro do evento.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                Cidade:<input class="form-control" id="Bairro" type="text" placeholder="Digite o bairro do evento *" required="required" data-validation-required-message="Por favor, digite o bairro do evento.">
                <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
                UF:<input class="form-control" id="Bairro" type="text" placeholder="Digite o bairro do evento *" required="required" data-validation-required-message="Por favor, digite o bairro do evento.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        </div>
    </section>
</body>