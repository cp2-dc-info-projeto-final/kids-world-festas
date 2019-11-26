<html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro </title>

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

      
<body>
    <center>
        <!-- Estilizar Formulário -->
        <form action="cadastroCtrl.php" method="POST">
                <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h2 class="section-heading text-uppercase">Cadastre-se</h2>
                                <h3 class="section-subheading text-muted">Cadastre-se e seja nosso cliente.</h3>
                            </div>
            
             <div class="form-group">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Nome" required="required" value="">
            </p>
             </div>

             <div class="form-group">
            <p>
                <label for="email">E-mail:</label>
                <input type="text" name="email" id="email" placeholder="E-mail" required="required" value="">
            </p>
             </div>

            <div class="form-group">
            <p>
                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf" placeholder="CPF" required="required" value="">
            </p>
            </div>

            <div class="form-group">
            <p>
                <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" id="telefone" placeholder="Telefone" required="required" value="">
            </p>
            </div>
            <div class="form-group">
            <p>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" placeholder="Senha" required="required" value="">
            </p>
            </div>

            <div class="form-group">
            <p>
                <label for="confirmarsenha">Confirmar senha:</label>
                <input type="password" name="confirmarsenha" id="confirmarsenha" placeholder="Confirmar senha" required="required" value="">
            </p>

            <p>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <div id="success"></div>
                        <br>
                <input type="submit" class="btn btn-primary btn-xl text-uppercase" name="enviar" value="Enviar">
                </div>
            </p>
            <?php
                session_start();
                if(array_key_exists('erro', $_SESSION) == true){
                    $erro = $_SESSION["erro"];
                    echo "$erro";
                }
            ?>
        </form>
    </center>
</body>

</html>