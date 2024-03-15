<?php

/*
 * TIPOS DE DATOS:
 *      - ENTEROS (int /integer) = 99
 *      - DECIMALES o COMA FLOTANTE  (float /  double) = 3.22
 *      - CADENA (string) = "Hola soy una cadena de texto"
 *      - BOOLEANOS (bool) = TRUE / FALSE
 *      - NULO = NULL
 *      - VECTORES (coleccionde datos) = ARRAY
 *      - OBJETO (conjunto de datos y funciones independientes)
 */

$numero = 45;
$decimal = 27.9;
$cadena ='Hola Ricardo.';
$booleano = true;
$nulo = null;

/*
 * CONSIDERACIONES SOBRE VARIABLES:
 *      - No pueden comenzar con un numero.
 *      - No pueden tener guinoes medios (si pueden usarse bajos)
 *      - No pueden tener operadores (+, -, *, /, ñ ni tildes)
 *      -
 */

echo 'El tipo de mi variable <strong>"numero"</strong> es: '.gettype($numero).'<br>';
echo 'El tipo de mi variable <strong>"decimal"</strong> es: '.gettype($decimal).'<br>';
echo 'El tipo de mi variable <strong>"cadena"</strong> es: '.gettype($cadena).'<br>';
echo 'El tipo de mi variable <strong>"booleano"</strong> es: '.gettype($booleano).'<br>';
echo 'El tipo de mi variable <strong>"nulo"</strong> es: '.gettype($nulo).'<br>';

//Debuggear una variable.
/*
 * Se usa la funcion var_dump y nos da:
 *      - Ubicación del archivo donde está la variable.
 *      - Ubiación de la línea en la que está la variable.
 *      - Típo de dato que tiene la variable.
 *      - Contenido de la variable.
 *      - Longitud de la variable.
 */
echo '<br>';
$mi_nombre='Ricardo Sandoval';
var_dump($mi_nombre);
echo '<br>';
$texto1= 'Hoy ell valor del $ es 0.92€';
echo '<br>'.$texto1.'<br>';

//Si usamos comillas dobles en la variable de cadena podemos concatenar una variable solamente nombrandola.
$texto2= "Tu edad es: $numero";
echo '<br>'.$texto2.'<br>';
//se puede hacer igual con comillas simples y la ejecución es más rapida que el de las comillas dobles.
$texto3= 'Tu edad es: '.$numero;
echo '<br>'.$texto3.'<br>';
// para escapar un caracter especial en una cadena de texto se usa \
$texto4= " \" 80 \" ";
echo '<br>Tu edad es: '.$texto4.'<br>';

?>

