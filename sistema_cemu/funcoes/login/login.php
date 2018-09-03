<?php
//FUNCAO DE LOGIN
function code($code, $senha){
    $qdo = conecta();

    try{
        $logar = $qdo->prepare("SELECT * FROM login WHERE code_login =? AND senha_login =? AND id_painel <= '3'");
        $logar -> bindValue(1, $code, PDO::PARAM_STR);
        $logar -> bindValue(2, md5(strrev($senha)), PDO::PARAM_STR);
        $logar -> execute();
        
        if($logar -> rowCount() == 1){
            return true;
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo $e -> getMessage();
    }
}

//PEGA O LOGIN
function pegaLogin($code){
    $qdo = conecta();
    
    try{
        $byLogin = $qdo->prepare("SELECT * FROM login WHERE code_login =? ");
        $byLogin -> bindValue(1, $code, PDO::PARAM_STR);
        $byLogin -> execute();

        if($byLogin -> rowCount() == 1){
            return $byLogin -> fetch(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }catch(PDOException $e){
        echo $e -> getMessage();
    }
}

//ADMINISTRADOR LOGADO
function logado($sessao){
   if (!isset($_SESSION[$sessao]) || empty($_SESSION[$sessao])) {
      header("Location:../index.php");
    }else{
       return true;
    }
}
?>