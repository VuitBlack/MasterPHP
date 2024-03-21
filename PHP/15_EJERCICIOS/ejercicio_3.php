<?php

/* 
 * Ejercicio 3:
 * Comprobar si una variable está vacía.
 * Si está vacía rellenarla con texto en minúsculas, pero mostrarlo 
 * convertido a mayusculas y en negrita.
 * 
 */

$texto = '';

if(empty($texto)){
    $texto = 'la variable se ha rellenado con texto en mínusculas pero aparecerá en negrita y mayusculas';
    echo '<strong>'.strtoupper($texto).'</strong>';
}else{
    echo 'La variable tiene este contenido: '.$texto;
}

?>