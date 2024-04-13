<?php

/*
 * Recoger 2 números por la URL con GET y hacer todas las operaciones básicas:
 * SUMA, RESTA, MULTIPLICACIÓN y DIVISION.
 */

$numero1=$_GET['numero1'];
$numero2=$_GET['numero2'];

if(isset($_GET['numero1'])){
    $numero1=(int)$_GET['numero1']; 
}else{
    $numero1=0;
}
if(isset($_GET['numero2'])){
    $numero2=(int)$_GET['numero2']; 
}else{
    $numero2=0;
}


echo '<h3>Calculadora básica</h3>';
echo 'Los números a operar son: '.$numero1.'   y   '.$numero2.'<br/><br/>';
echo 'SUMA --> '.$numero1.' + '.$numero2.' = '.($numero1+$numero2).'<br/>';
echo 'RESTA --> '.$numero1.' - '.$numero2.' = '.($numero1-$numero2).'<br/>';
echo 'MULTIPLICACIÓN --> '.$numero1.' x '.$numero2.' = '.($numero1*$numero2).'<br/>';
echo 'DIVISIÓN --> '.$numero1.' / '.$numero2.' = '.($numero1/$numero2).'<br/>';

