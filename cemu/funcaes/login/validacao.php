
<?php

include("conexao.php");

	$code = $_POST['code'];
	$senha = $_POST['senha'];

	$consulta = "SELECT * FROM login WHERE code_acesso ='$code' AND senha = '$senha'";
	$qry = mysql_query($conexao(), $consulta);

?>