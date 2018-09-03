
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>configuraçães</title>
</head>

<body>
	<?php
	  include("conexao.php");
	  	  
	       @session_start();
	         
			 $nome       =  $_SESSION['nome'];
			 $status     =  $_SESSION['status'];
			 $code	 	 =  $_SESSION['code'];
			 $senha  	 =  $_SESSION['senha'];
			 $id_aluno	 =  $_SESSION['id_aluno'];
			 $painel     =  $_SESSION['painel'];
			
			if($status == ''){
						echo "<script language='javascript'>window.location='../login.php'; </script>";
				}
			else if($senha == ''){
						echo "<script language='javascript'>window.location='../login.php'; </script>";
			}
			else if($senha == ''){
						echo "<script language='javascript'>window.location='../login.php'; </script>";
			}
			else{
				 if($painel_atual !=$painel){
					echo "<script language='javascript'>window.location='../login.php'; </script>"; 
				 }
			}
						
	      
			
	?>
</body>
</html>

</body>
</html>
