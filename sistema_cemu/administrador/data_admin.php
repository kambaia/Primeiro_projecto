<style>
    .data_hora{
        color : #777;
        font-weight: 700;
        margin: 0 auto;
    }
</style>
<div class="data_hora">
<?php
$date = getdate();

switch ($date['wday']) 
{
    case 0:
        echo " Domingo ";
        break;
    case 1:
        echo " Segunda-feira ";
        break;
    case 2:
        echo " Terça-feira ";
        break;
    case 3:
        echo " Quarta-feira ";
        break;
    case 4:
        echo " Quinta-feira ";
        break;
    case 5:
        echo " Sexta-feira ";
        break;
    case 6:
        echo " Sábado ";
        break;
}

echo $date ['mday'];
switch ($date['mon']) 
{
    case 1:
        echo " de Janeiro de ";
        break;
    case 2:
        echo " de Fevereiro de ";
        break;
    case 3:
        echo " de Março de ";
        break;
    case 4:
        echo " de Abril de ";
        break;
    case 5:
        echo " de Maio de ";
        break;
    case 6:
        echo " de Junho de ";
        break;
    case 7:
        echo " de Julho de ";
        break;
    case 8:
        echo " de Agosto de ";
        break;
    case 9:
        echo " de Setembro de ";
        break;
    case 10:
        echo " de Outubro de ";
        break;
    case 11:
        echo " de Novembro de ";
        break;
    case 12:
        echo " de Dezembro de ";
        break;
}


echo $date ['year'];
echo "&nbsp;Ás&nbsp;";
echo date('H:m');
echo "&nbsp;-&nbsp;";

$hora = date('H');
if ($hora >= 5 && $hora < 12) {
    echo "Bom dia!";
}else if ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!";
}else if ($hora >= 18 && $hora < 24) {
    echo "Boa noite!";
}else{
    echo "Boa madrugada";
}

?>
</div>
