<?php
//OPERADORES ARITMÉTICOS.
$numero1 = 55;
$numero2 = 33;


//SUMA
echo 'Suma: '.($numero1+$numero2).'<br/>';
//RESTA
echo 'Resta: '.($numero1-$numero2).'<br/>';
//MULTIPLICACIÓN
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
//DIVISIÓN
echo 'División: '.($numero1/$numero2).'<br/>';
//RESTO
echo 'Resto: '.($numero1%$numero2).'<br/>';

// OPERADORES DE INCREMENTO Y DECREMENTO.
$year=2019;
echo '<h1>'.$year.'</h1><br/>';
//Incrementar. es como hacer YEAR + 1
$year=2019;
$year++;
echo '<h3>Incremento: '.$year.'</h3><br/>';
//Decrementar. es como hacer YEAR - 1
$year=2019;
$year--;
echo '<h3>Decremento: '.$year.'</h3><br/>';
//PRE-INCREMENTO es como hacer 1 + YEAR
$year=2019;
++$year;
echo '<h3>Pre-Incremento: '.$year.'</h3><br/>';
//PRE-DECREMENTO es como hacer 1 + YEAR
$year=2019;
--$year;
echo '<h3>Pre-Decremento: '.$year.'</h3><br/>';


//OPERADORES DE ASIGNACIÓN
$edad =55;
echo '<h3>Edad: '.($edad).'</h3><br/>';
//añadir a una variable => $edad = $edad + 5;
$edad +=5;
echo '<h3>Edad: '.($edad).'</h3><br/>';
//restar a una vaiable  => $edad = $edad - 10;
$edad -=10;
echo '<h3>Edad: '.($edad).'</h3><br/>';
//multiplicar a una vaiable  => $edad = $edad * 2;
$edad *=2;
echo '<h3>Edad: '.($edad).'</h3><br/>';
//dividir a una vaiable  => $edad = $edad / 4;
$edad /=4;
echo '<h3>Edad: '.($edad).'</h3><br/>';

?>