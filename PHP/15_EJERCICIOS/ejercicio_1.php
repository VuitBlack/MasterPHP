<?php

/* 
 * Ejercicio 1:
 * Crear un Array que tenga 8 números y:
 *      - recorrerlo y mostrarlo
 *      - ordenarlo y mostrarlo
 *      - mostrar su longitud
 *      - buscar un elemento del array.
 */

//Creo el array.
$numeros = ['39','45','11','3','26','67','78','58'];

//Muestro el array
echo 'Muestro el array <strong>NUMEROS</strong>:<br/><br/>';
for ($i=0; $i<count($numeros); $i++){
    echo $numeros[$i].' ';
}
echo '<hr/>';

//Ordenarlo y mostrarlo
echo 'Ordeno y muestro el array <strong>NUMEROS</strong>:<br/><br/>';
asort($numeros);
foreach ($numeros as $numero) {
    echo $numero.' ';
}
echo '<hr/>';

//Muestro la longitud
echo 'Muestro la longitud el array <strong>NUMEROS</strong>:<br/><br/>';
echo 'La longitud del array <strong>NUMEROS</strong> es: '.count($numeros).' elementos';
echo '<hr/>';

//Busco un elemento en el array
echo 'Busco el elemento 26 el array <strong>NUMEROS</strong>:<br/><br/>';
$resultado = array_search('26', $numeros);
if(!empty($resultado)){
    echo 'He encontrado a: '.$numeros[$resultado].' dentro del array de numeros<br/>';
    echo 'y tiene el índice: '.$resultado.' dentro del array';
}else{
    echo 'No existe el número buscado.';
}


?>