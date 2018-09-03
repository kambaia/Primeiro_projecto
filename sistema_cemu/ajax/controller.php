<?php
ob_start();session_start();sleep(2);
require '../funcoes/banco/conexao.php';
require '../funcoes/login/login.php';

$acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
switch ($acao) {
    case 'code':
    
    //FAZ A INTERACAO
    $code  = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    if (code($code, $senha)){
        //CRIA SESSAO
        $_SESSION['sessao'] = pegaLogin($code); 
    }else{
        $dados = pegaLogin($code);
        if (empty($code) || empty($senha)) {
            echo 'vazio';
        }elseif(!$dados){
            echo 'naoexiste';
        }elseif ($dados->senha_login != md5(strrev($senha))) {
            echo 'diferentesenha';
        }elseif ($dados->id_painel > 3) {
            echo 'painel';
        }elseif ($dados->id_status > 1) {
            echo 'status';
        }              
    }
    break;

    default :
        echo "erro";
        break;
}
ob_end_flush();
?>