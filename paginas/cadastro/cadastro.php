<html>

<head>
  <title>Cadastro</title>
  <link rel="Stylesheet" type="text/css" href="estilo.css" media="screen" />
</head>

<body>


  <div id="login">

    <ul>

    </ul>
  </div>


  <div id="menu">
    <img src "logo.png">
    <center>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="#">Quem somos</a></li>
        <li><a href="#">Servicos</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </center>

  </div>

  <div id="conteudo">
    <center>
      <div id="formulario">
        <br></br>
        <form action="conexao-cadastro.php" method="POST">

          <fieldset>
            <legend>Cadastro</legend>

            <p align="center">
              Nome:
              <input type="text" name="nome" size=40 maxlength=40 value="">
              <br></br>
              E-mail:
              <input type="text" name="email" size=40 maxlength=40 value="">
              <br></br>
              CPF:
              <input type="text" name="cpf" size=20 maxlength=15 value="">
              <br></br>
              Telefone:
              <input type="text" name="telefone" size=10 maxlength=10 value="">
              <br></br>
              Senha:
              <input type="password" name="senha" size=10 maxlenlegth=10 value="">
              Confirmar Senha:
              <input type="password" name="confirmarsenha" size=10 maxlenlegth=10 value="">
              <p align="center">
                <input class="nv" width="50px" type=submit name=enviar value=ENVIAR>
              </p>
              <p> <label>
                <?php
                  session_start();
                  $erro = $_SESSION["erro"];
                  echo "$erro";
                ?>
                  </label>
              </p>
          </fieldset>
          
        </form>

      </div>
    </center>

  </div>
  <div id="rodape">

  </div>

</body>

</html>