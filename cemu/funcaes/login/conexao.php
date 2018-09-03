<?php 
   define('host', 'localhost');
   define('user', 'root');
   define('pass', '');
   define('bd', 'sistema_cemu');


   function conectar(){
     	$servidor = "mysql:host=".host.";dbname=" .bd;
	     try {
	     	$conexao = new PDO($servidor, user, pass);
	     	$conexao -> SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conexao;

	     } catch (Exception $erro) {
	     	echo $erro->getmessage();
	     }
	}

?>

