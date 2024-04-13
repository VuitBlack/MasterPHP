<?php
/* 
 * Ejercicio 2:
 * Añadir elementos a un array siempre que su longitud sea menor de 120.
 * Mostrar la información del araray en la pantalla.
 */

$numeros = array(); 
$j=1;

for($i=0; $i<120;$i++){
    $numeros[$i]=rand(0,999);    
}

echo '<h3>Mostrar la información del array en pantalla</h3><br/>';
foreach ($numeros as $numero) {
    if($j<=120){
        echo $j.'.- '.$numero.'<br/>';
        $j++;
    }
}

?>
