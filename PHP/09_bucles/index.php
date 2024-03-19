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

echo '<hr/>';
//Mostrar una tabla de multiplicar

$contador=1;

if(isset($_GET['numero'])){     //isset comprueba si una variable existe
    //CASTEO para convertir el parametro recibido por URL de String a INT ponemos (int) delante de la variable
    $numero=(int)$_GET['numero']; 
}else{
    $numero=1;
}

echo "<h1>Tabla de multiplicar del número: $numero</h1>";

while ($contador<=10) {
    echo "$numero x $contador = ".($numero*$contador).'<br/>';
    $contador++;
}

echo '<hr/>';
/*BUCLE DO-WHILE
 * Este bucle tiene la característica que que al menos se ejecuta el bloque de código una vez porque 
 * se realiza DO -> bloque de código -> WHILE se evalua la condición en caso que no corresponda se repite.
 * Estructura:
 *      do {
 *          bloque de código
 *      }while(conidición)  
 */

$edad=18;
$contador1=1;

do{
        echo 'Tienes acceso a las discotecas. Contador:'.$contador1.'<br/>';
         $contador1++;
}while($edad>=18 && $contador1 <=10);


?>