<style>
    .data_hora{color:#fff; margin-bottom:7px;}
</style>
<div class="data_hora">
<?php
$date = getdate();

echo $date ['mday'];
switch ($date['mon']) 
{
    case 1:
        echo " / 01 / ";
        break;
    case 2:
        echo " / 02 / ";
        break;
    case 3:
        echo " / 03 / ";
        break;
    case 4:
        echo " / 04 / ";
        break;
    case 5:
        echo " / 05 / ";
        break;
    case 6:
        echo " / 06 / ";
        break;
    case 7:
        echo " / 07 / ";
        break;
    case 8:
        echo " / 08 / ";
        break;
    case 9:
        echo " / 09 / ";
        break;
    case 10:
        echo " / 10 / ";
        break;
    case 11:
        echo " / 11 / ";
        break;
    case 12:
        echo " / 12 / ";
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
