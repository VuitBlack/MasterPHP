<?php

/*
  FUNCIONES:
  Conjunto de instrucciones agrupadas bajo un nombre 
  para ser llamadas las veces que sean necesarias invocando la función.
  
  Sintaxis:
  function nombreFuncion(parametro1, parametro2, ..... parametroN){
       BLOQUE DE INSTRUCCIONES
  }
 
 Para invocarla
  nombreFuncion(parametro1, parametro2, ..... parametroN);
 
 */


function muestraNombres(){
    echo 'Ricardo Sandoval. <br/>';
    echo 'Rosa Pérez. <br/>';
    echo 'Ana Belén Pérez. <br/>';
    echo 'Pedro Gonzalez. <br/>';
    
}

muestraNombres();


echo '<hr>';


echo "<hr/>";
//Funcion con devolución de parametros, las funciones siempre deben devolver algo,
//aunque sea un true o false

function devuelveNombre($nombre){
    return "El nombre es: $nombre"; 
}

echo devuelveNombre("Ricardo Sandoval");

echo "<hr/>";



?>