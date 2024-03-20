<?php

//FUNCIONES PREDEFINIDAS DE PHP

//Función para debuggear, muestra toda la información sobre la variable que le pasemos
$nombre = 'Ricardo Sandoval';
var_dump($nombre);
echo '<br/>';

//Funciones de fechas -> 
echo date('d-m-y'); //nos da la fecha actual
echo '<br/>';
echo time();  //nos da el timestamp del momento en el que se ejecuta
echo '<br/>';

//Funciones matemáticas
echo 'Raiz cuadrada de 81= '.sqrt(81);
echo '<br/>';

//Generar número aleatorio
echo 'Genera un número aleatorio = '. rand().'<br/>';
echo 'Genera un número aleatorio entre 10 y 40 = '. rand(10,40).'<br/>';

//Genera el número PI
echo 'Genera un número PI = '.pi().'<br/>';

//Redondear
echo 'Redondeo de un número 7.82345=  '.round(7.85345,2).'<br/>';

//MAS FUNCIONES GENERALES

//Nos devuelve el tipo de funcion que le pasemos
echo gettype($nombre).'<br/>';

//Comprobar si una variable es de un tipo  u otro se hace con un IF

if(is_string($nombre)){
    echo "La variable <strong>\$nombre</strong> es de tipo <strong>\"STRING\"</strong>".'<br/>';
}
if(is_float($nombre)){
    echo "La variable <strong>\$nombre</strong> es de tipo <strong>\"FLOAT\"</strong>".'<br/>';
}else{
    echo "La variable <strong>\$nombre</strong> NO es de tipo <strong>\"FLOAT\"</strong>".'<br/>';
}

//ISSET -> nos dice si la variable existe en nuestro programa, si existe devuelve TRUE, y si no existe FALSE
If(isset($edad)){
    echo 'La variable <strong>$edad</strong> EXISTE en nuestro programa.<br/>';
}else{
    echo 'La variable <strong>$edad</strong> NO EXISTE en nuestro programa.<br/>';
}

//FUNCION TRIM quita los espacios delante y detrás de nuestro STRING

$frase = '              la variable TRIM quita los espacios en blanco delante y detras del texto             ';
var_dump($frase);
echo '<br/>';
var_dump(trim($frase));

// Eliminar variables e índices de arrays.
$year2=2024;
unset($year2);
var_dump($year2);
echo '<br/>';

//Empty comprueba si una variable: NO EXISTE, ESTÁ VACÍA o SU VALOR ES 0
$texto='';

if(empty($texto)){
    echo 'La variable esta vacía, existe o es NULL.<br/>';
} else {
    echo 'La variable TIENE CONTENIDO.<br/>';
}

//STRLEN nos devuelve la longitud de una caden
$cadena='12345';
echo strlen($cadena).'<br/>';

//STRPOS Encuentra en un string la posición de un caracter determinado.
$frase2='La Vida Es Vella';
echo strpos($frase2, 'vida').'<br/>';  //la palabra vida esta en la posición 3
echo strpos($frase2, 'e').'<br/>';      //la primera letra 3 está en la posición 8

//STR_REPLACE Sirve para reemplazar cadenas o elemento de una cadena.
echo str_replace('Vida', 'Moto', $frase2).'<br/>';  // sustituimos la palabra vida por moto.
echo str_replace(' ', '_', $frase2).'<br/>'; //Sustituimos los espacios por guiones bajos.

$frase2=str_replace(' ', '_', $frase2).'<br/>'; // si lo aplicamos sobre la variable el cambio es permamente en la cadena
echo $frase2.'<br/>';

//  STRTOLOWER convierte el String a minúsculas
echo strtolower($frase2).'<br/>';

// STRTOUPPER convierte el String a mayúsculas
echo strtoupper($frase2).'<br/>';


?>