<?php
	$painel_atual ="admin";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrador</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<?php
			include("../config.php");
		?>
	</head>
	<body>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<h1>Listar Cursos</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<table class="table">
						<thead>
							<?php 
							echo  "<h3>Nª de Acesso: $code , Você está: $status</h3> ";
							?>
							<tr>
								<th>#</th>
								<th>Nome </th>
								<th>Ação</th>
								
							</tr>
							<td><?php echo "'$nome'";?>
						</thead>
						<tbody>
							<!--Colocarei o codigo php para buscar os dados na tabela-->
						</tbody>
					 </table>
				</div>
			</div>		
		</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>