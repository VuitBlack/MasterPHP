<?php

/*
 * Mostrar en pantalla el cuadrado de los primeros 40 números.
 */
//BUCLE FOR

for($i=1;$i<=40;$i++){
    echo "El cuadrado de $i es: ".($i*$i).'<br/>';
}

echo '<hr>';
//BUCLE WHILE
$contador=1;
while($contador<=40){
    echo "El cuadrado de $contador es: ".($contador*$contador).'<br/>';
    $contador++;
}

