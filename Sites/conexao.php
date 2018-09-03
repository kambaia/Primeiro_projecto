<?php
function conectar(){
 $servidor = "localhost";
 $usuario ="root";
 $senha = "";
 $bd= "escola";
	$con = new mysqli($servidor, $usuario, $senha, $bd) or die("Erro na conexão");
	return $con;
}
   $conexao = conectar();
  

?>