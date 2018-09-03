<?php

	$painel_atual ="aluno";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aluno</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo_aluno.css">
		<link rel="stylesheet" type="text/css" href="css/tabelas_notas.css">
		<?php
			include("../config.php");
			include("upload_img.php");
		?>
<!DOCTYPE html>
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			
						<div class="header">
							<div class="pequeno_menu"><a href="index.php">Pular conteúdo</a></div>
								<div class="perfil">
										<img src="img/Kambaia.jpg" width="200" height="200">
									<form action="uploa_img.php" method="POST" enctype="multipart/form-data">
										Arquivo<input type="file" required name="Arquivo">
										<input type="submit" value="salvar">
										<?php 
											echo "<script language='javascrept'>; </script>";
										?>
									</form>

									<?php echo  "<h3>$nome : <br>nº de Acesso é:  $code</h3>";	?>

								</div>
								<div class"opcoes">
									<h2> <a class="a1"href="../login.php">Sair</h2></a>

								</div>
										<h3>Estudante do martires do uganda</h3>
						</div>

						<div class="main_nav">
								<li><a href="index.php">Meu perfil</a></li>
								<li><a href="notas.php">Notas</a></li>
								<li><a href="disciplinas.php">disciplina</a></li>
								<li><a href="trabalhos.php">Trabalhos recebidos</a></li>
								<li><a href="reclamacao.php">Reclamar nota</a></li>
						</div>