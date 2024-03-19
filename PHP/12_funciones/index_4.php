<?php

//FUNCIONES DENTRO DE FUNCIONES.
//Funcion que devuelva nombre y apellidos.

function getNombre($nomb) {
    $texto = "El nombre es: $nomb";
    return $texto;
}

function getApellidos($apel) {
    $texto = "Los apellidos son: $apel";
    return $texto;
}

function devuelveNomb($nomb, $apel){
    $texto = getNombre($nomb)
                    .'<br/>'.
                    getApellidos($apel);
    return $texto;
}

echo devuelveNomb("Ricardo","Sandoval");

echo "<hr/>";

