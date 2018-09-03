
<?php 

include("funcaes/login/validacao.php");
conectar();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap 3.3.5 Documentation - BootstrapDocs</title>
 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="vazio">
      </div>
      <form class="form-signin" action="funcaes/login/validacao.php" method="POST" name="formulario">
          <div class="img-circle logo">
             <img  src="img/logo.png" width="100" height="100">
          </div>
          <h4 class="form-signin-heading areaRestrita">Área restrita</h4>
          <label for="inputEmail" class="sr-only">Codigo de acesso</label>
          <input type="Text" name="code" class="form-control" placeholder="Informe o seu codigo de acesso" required autofocus>
          <br>
          <label for="inputPassword" class="sr-only">Senha</label>
          <input type="password" name="senha" class="form-control" placeholder="Informe a sua senha" required>
          <button class="btn btn-lg btn-primary btn-block" name="botao" type="submit">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          Acessar</button>
      </form>

    </div> <!-- /container -->
   
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>

  </body>
</html>
