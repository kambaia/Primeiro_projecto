
<?php
include("conexao.php");
	if(isset($_POST['botao'])){
		$code = $_POST['code'];
		$senha = $_POST['senha'];

		 
		if($code ==''){
			 echo "<h5> Nº de acesso está vazio! por favor digita o seu nº se acesso.</h5>";
		 }
		
		else if($senha ==''){
			 echo "<h5> senha vazio! Por favor digita a sua senha.</h5>";
		 }
		  else {
			  $consulta_login = "SELECT * FROM login WHERE code='$code' AND senha='$senha' ";
			 $result_dados= mysqli_query($conexao, $consulta_login); 

			  if(mysqli_num_rows($result_dados) > 0){

				  while($result_todos_db= mysqli_fetch_assoc($result_dados)){
					  $status    =  $result_todos_db['status'];
					  $nome      =  $result_todos_db['nome']; 
					  $code		 =  $result_todos_db['code'];
					   $senha  	 =  $result_todos_db['senha'];
					   $id_aluno = $result_todos_db['id_aluno'];
					   $painel   =  $result_todos_db['painel'];
						if($status=='inativo'){
							 echo "<h5>Você tem alguns meses em atraso. por isso o seu estado está inativo. Dirija-se a tesouraria para resolver o seu problema.</h5>";
						}
					  else{
						 session_start();
						 
						  $_SESSION['nome'] 	   = $nome;
						   $_SESSION['code'] 	   = $code;
						   $_SESSION['senha']	   = $senha;
						   $_SESSION['status'] 	   = $status;
						   $_SESSION['id_aluno']   = $id_aluno;
						   $_SESSION['painel']     = $painel;

							if($painel=='admin'){
								echo "<script language='javascript'>window.location='admin'; </script>";
							}
						  else if($painel=='aluno'){
								echo "<script language='javascript'>window.location='aluno'; </script>";
							}
						  else if($painel=='professor'){
								echo "<script language='javascript'>window.location='professor'; </script>";
							}

					  }
				  }
				}
			  else{
				   echo "<h5>dados incorrentos!.</h5>";
			  }
		  }
		}
?>