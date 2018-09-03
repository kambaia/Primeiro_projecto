<?php
//CONSTANTES
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BD','sistema_cemu');

//FUNCAO DA CONEXAO
function conecta(){
    $dns = "mysql:host=".HOST.";dbname=".BD;

    try{
        $con = new PDO($dns ,USER ,PASS);
        $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $con;
    }catch(PDOException $erro){
        echo $erro -> getMessage();
    }
}
?>