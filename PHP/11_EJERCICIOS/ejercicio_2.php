<?php

// Sacar por pantalla todos los números pares que hay entre el 1 y el 100

$numero=1;
for ($i=1;$i<=100;$i++){
    if($numero%2 ==0){
        echo "El número $numero par.<br/>";
    }
    $numero++;
}