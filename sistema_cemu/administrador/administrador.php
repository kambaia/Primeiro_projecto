<?php
ob_start();session_start();
require '../funcoes/banco/conexao.php';
require '../funcoes/login/login.php';
conecta();
logado('sessao');

if (isset($_GET['logout']) && $_GET['logout'] == 'true' ) {
    session_destroy();
    header("Location:../index.php");
} else {
    # code...
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Área administrativa</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link href="img/logo.png" rel="shortcut icon">
    
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td>
        <div class="data_admin">
            <?php include("data_admin.php");?>
        </div>
        <nav class="navbar navbar-default" role="navigation" style="">
            <div class="container container_menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">Home</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="" class="dropdown-collapse" data-toggle="dropdown">Curso e disciplina <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Cadastrar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-collapse" data-toggle="dropdown">Estudantes</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-collapse" data-toggle="dropdown">Professores</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-collapse" data-toggle="dropdown">Setor financeiro</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-collapse" data-toggle="dropdown">Relatórios</a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-collapse" data-toggle="dropdown">Suporte tecnico</a>
                        </li>
                    </ul>
                     <p class="pull-right logout">
                        Seja Bem vindo: Marcio Flavio&nbsp;
                        <a href="?logout=true" class="btn btn-danger">Sair</a>
                    </p>
                </div>
            </div>
        </nav>     
        </td>
    </tr>
    <tr>
        <td>
            <table border="0" cellspacing="0" cellspading="0" width="84%" align="center" style="margin-bottom: 10px;">
                <tr>
                    <td width="22%"><div class="titulo">Informacões</div></td>
                    <td><div class="titulo" style="width: 100%;">Home</div></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table border="0" cellspacing="0" cellspading="0" width="84%" align="center">
               <tr>
                   <td width="21.5%" class="bg_table">
                        <ul class = "nav nav-list"> 
                            <li class = "linhaHeader"><b>Curso e disciplina</b></li> 
                            <li class = "linha">Total de curso cadastrado <span class="badge bg">12</span></li>  
                            <li class = "linha">Total de disciplina cadastrado <span class="badge bg">12</span></li><br>
                        </ul>
                        <ul class = "nav nav-list"> 
                            <li class = "linhaHeader"><b>Professor</b></li> 
                            <li class = "linha">Professor ativo <span class="badge bg">12</span></li>  
                            <li class = "linha">Professor inativo <span class="badge bg">12</span></li><br>
                        </ul>
                         <ul class = "nav nav-list"> 
                            <li class = "linhaHeader"><b>Estudante</b></li> 
                            <li class = "linha">Estudante ativo <span class="badge bg">12</span></li>  
                            <li class = "linha">Estudante inativo <span class="badge bg">12</span></li><br> 
                        </ul>
                         <ul class = "nav nav-list"> 
                            <li class = "linhaHeader"><b>Setor financeiro</b></li> 
                            <li class = "linha">Cobrança gerada este mês <span class="badge bg">12</span> </li>  
                            <li class = "linha">Cobrança paga <span class="badge bg">12</span></li>
                            <li class = "linha">Cobrança não paga <span class="badge bg">12</span></li><br>
                        </ul>
                         <ul class = "nav nav-list"> 
                            <li class = "linhaHeader"><b>Suporte tecnico</b></li> 
                            <li class = "linha">Contacto aguardam resposta <span class="badge bg">12</span> </li>  
                            <li class = "linha">Contacto respondido <span class="badge bg">12</span></li>
                            <li class = "linha">Tota de contacto <span class="badge bg">12</span></li> 
                        </ul>
                   </td>
                   <td valign="top">
                        <div class="notificacoes">
                           
                        
                        </div>
                        
                   </td>
               </tr> 
            </table>
        </td>
    </tr>
</table>

                
</body>
</html>
<?php ob_end_flush(); ?>