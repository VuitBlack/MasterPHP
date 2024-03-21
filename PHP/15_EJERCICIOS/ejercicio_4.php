<?php

/* 
 * Ejercicio 4:
 * Crar un script en PHP que tenga 4 variables:
 *      - String
 *      - Array
 *      - INT
 *      - Booleana
 * E imprimir un mensaje según el tipo de variable que sea.
 * 
 */

$cadena ='string';
$arreglo = ['1', '2', '3', '4', '5'];
$numero = 1;
$boolean = true;

echo 'La variable <strong>$cadena</strong> es de tipo: <strong>'.gettype($cadena).'</strong><br/>';
echo 'La variable <strong>$arreglo</strong> es de tipo: <strong>'.gettype($arreglo).'</strong><br/>';
echo 'La variable <strong>$numero</strong> es de tipo: <strong>'.gettype($numero).'</strong><br/>';
echo 'La variable <strong>$boolean</strong> es de tipo: <strong>'.gettype($boolean).'</strong><br/>';

//otra manera de hacerlo es con if.
echo '<hr/>';


if(is_string($cadena)){
    echo 'La variable <strong>$cadena</strong> es de tipo: STRING<br/>';
}

if(is_array($arreglo)){
    echo 'La variable <strong>$arreglo</strong> es de tipo: ARRAY<br/>';
}

if(is_int($numero)){
    echo 'La variable <strong>$numero</strong> es de tipo: INTEGER<br/>';
}

if(is_bool($boolean)){
    echo 'La variable <strong>$boolean</strong> es de tipo: BOOLEAN<br/>';
}


?>