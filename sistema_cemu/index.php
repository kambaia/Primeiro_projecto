<?php
session_start();
require 'funcoes/banco/conexao.php';
require 'funcoes/login/login.php';
conecta();

//echo "<pre>";
//print_r($_SESSION['painel_login']);
//echo "</pre>";
//echo "<br /><br />";

//echo $_SESSION['painel_login']-> nome_login;
?>
<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema cemu</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="img/logo.png" rel="shortcut icon">
  </head>

  <body class="text-center" style="background: url(img/fundo.png);">
    <div class="container">
        <div class="img-circle img_logo">
          <img src="img/logo.png" width="90" height="90">
        </div>
      <div class="login">
        
        <h6 class="h4 mb-4 font-weight-normal arearestrita">Área administrativa</h6>
    
        <?php include "include/data.php"; ?>
        
        <div class="retorno"></div>

        <form class="form-signin form" name="form_login" method="POST" action="">
          <div class="form-group">
          <label for="code" class="sr-only">Código de acesso</label>
          <input type="text" name="code" class="form-control" placeholder="Informe o seu código de acesso" required="" autofocus="">
          </div>
          <div class="form-group">
          <label for="senha" class="sr-only">Senha</label>
          <input type="password" name="senha" class="form-control" placeholder="Informe a sua senha" required="">
          </div>

          <button class="btn btn-primary bg-btn" type="submit">
          <span class="glyphicon glyphicon-user"></span> Entrar</button>
          <img src="img/loader.gif" class="loader" alt="Carregando" style="display:none"/>
        </form>

		 <center>
		 	<img src="img/loader2.gif" align="center" id="loader" alt="Carregando" style="display:none; border-radius:10px;"/>
		 </center>
    
      </div>
    </div>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</body></html>