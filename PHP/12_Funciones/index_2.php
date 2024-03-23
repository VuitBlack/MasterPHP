<?php

//Realizar una función que muestre la tabla de un número y  tambien sea capaz
//de mostrar todas las tablas de multutiplicar 

function tablaMultiplicar($numero){
    echo '<h3>Tabla de multiplicar del número: '.$numero.'</h3>';
    for ($i=1; $i<=10; $i++){
        echo $numero.' x '.$i.' = '.($numero*$i).'<br/>';
    }
    
}

if(isset($_GET['numero'])){
    tablaMultiplicar($_GET['numero']);
}else{
    echo '<h3>No se ha introducido un número en la URL para obtener la tabla de multiplicar.</h3>';
}

echo '<hr/>';
// Mostar todas las tablas de multiplicar
for($i=1; $i<=10; $i++){
    tablaMultiplicar($i);
}

echo "<hr/>";

