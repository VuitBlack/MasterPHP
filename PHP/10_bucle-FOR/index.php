<?php

/* BUCLE FOR
 *      for (variable contador, condición, incremento/decremento contador){
 *              BLOQUE DE INSTRUCCIONES
 *      }
 */

//SUMAR TODOS LOS NÚMEROS DEL 1 AL 100 Y MOSTRAR EL RESULTADO

$resultado=0;

for($i=0;$i<=100; $i++){
    $resultado += $i;
}

echo "<h3>El resultado de la suma de los 100 primeros números es: $resultado</h3>";

echo '<hr/>';

/* TABLA DE MULTIPLICAR 
 * $contador=1;

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
 */
$contador=1;

if(isset($_GET['numero'])){     //isset comprueba si una variable existe
    //CASTEO para convertir el parametro recibido por URL de String a INT ponemos (int) delante de la variable
    $numero=(int)$_GET['numero']; 
}else{
    $numero=1;
}

echo "<h1>Tabla de multiplicar del número: $numero</h1>";
for ($i=0;$i<=10;$i++){
    echo "$numero x $i = ".($numero*$i).'<br/>';
}

echo '<hr/>';
//BREAK - sive para hacer una salida del bucle

$contador=1;

if(isset($_GET['numero'])){     //isset comprueba si una variable existe
    //CASTEO para convertir el parametro recibido por URL de String a INT ponemos (int) delante de la variable
    $numero=(int)$_GET['numero']; 
}else{
    $numero=1;
}

echo "<h1>Tabla de multiplicar del número: $numero</h1>";
for ($i=0;$i<=10;$i++){
    if($numero==0){
        echo "No se puede mostrar la tabla del $numero por ser PROHIBIDA";
        break;
    }
    echo "$numero x $i = ".($numero*$i).'<br/>';
}