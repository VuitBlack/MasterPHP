<?php
/*BUCLE WHILE
Itera o repite la ejecución de una serie de instrucciones tantas
veces como sea necesario mientras que no se cumpla una condición.

Estructura:
while(condicion){
    bloque de instrucciones
}

*/

//Mostrar los números del 1 al 100

$numero=0;

while($numero<=100){
    echo $numero;
    if($numero !=100){
        echo ', ';
    }
    $numero++;
}


?>