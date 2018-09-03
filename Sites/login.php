

<?php include("cabecalho.php")?>
 
<div class="box2"><?php include("validacao.php");?></div>

  	      	<form method="post" action="" enctype="multipart/form-data" class="form-inline" role="form">
                <h5>
                 
                </h5>
                <h4>Nº de Estudante:</h4>
                <input type="text" class="testo2" name="code" placeholder="Nº de acesso">
                <br>
                <br>
                <h4>Senha:</h4>
                <input type="Password" name="senha" class="testo2" placeholder="senha">
                  <br>
                  <h6><input type="checkbox" class=""> Remember me </h6>
                   <button type="submit" class="botao" name="botao">Acessar</button>
            </form>

<?php include("rodape.php"); ?>
     