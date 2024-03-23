<?php

/*
 * VARIABLES LOCALES:
 * Se definen dentro de una función y solo están disponibles dentro de la función en la que se declaran.
 * 
 * VARIABLES GLOBALES:
 * Se definen  fuera de  una función y están disponibles dentro y fuera de las funciones
 * 
 */

//Variabel global
$frase="El éxito es la habilidad para ir de fracaso en fracaso sin perder el entusiasmo";



function imprimirFrase() {
    //indicamos que la variable $frase es global para poder usarla dentro de la función.
    global $frase;
    echo '<h1>'.$frase.'</h1>';
    
    //VARIABLE LOCAL
    $year=2024;
    echo '<h1>'.$year.'</h1>';   
}

echo $frase;

imprimirFrase();

echo $year;  //no muestra la variable por pantalla por estar declarada dentro de la función y ser variable local.


echo '<hr/>';
//FUNCIONES VARIABLES
//Para asignar una función a una variable, simplemete ponemos el nombre de la funcion y 
//al llamar a la variable le colocamos los dos paréntesis de la función..


function buenosDias() {
    return '<h3>Hola! Buenos días:)</h3>';
}

function buenasTardes() {
    return '<h3>Hey!! Que tal ha ido la comida?</h3>';
}

function buenasNoches(){
    return '<h3>¿Te vas a dormir ya?... Buenas noches!!</h3>';
}

$horarioM='buenosDias';
echo $horarioM();

$horarioT='buenasTardes';
echo $horarioT();

$horarioN='buenasNoches';
echo $horarioN();


?>