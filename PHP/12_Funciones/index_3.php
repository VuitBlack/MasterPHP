<?php

// FUNCION DE CALCULADORA pasando varios parámetros obligatorios 

function calculadora($num1, $num2) {
    echo "<h3>CALCULADORA:</h3>";
    echo "SUMA: $num1 + $num2 = ".$num1+$num2.'<br/>';
    echo "RESTA: $num1 - $num2 = ".$num1-$num2.'<br/>';
    echo "MULTIPLICACIÓN: $num1 x $num2 = ".$num1*$num2.'<br/>';
    echo "DIVISIÓN: $num1 / $num2 = ".$num1/$num2.'<br/>';
    echo "<hr/>";
}

calculadora(10, 5);

// FUNCION DE CALCULADORA pasando varios parámetros obligatorios y el último opcional

function calculadora2($num1, $num2, $negrita=false) {
    
    if($negrita){
        echo "<h1>";
    }
    
    echo "<h3>CALCULADORA:</h3>";
    echo "SUMA: $num1 + $num2 = ".$num1+$num2.'<br/>';
    echo "RESTA: $num1 - $num2 = ".$num1-$num2.'<br/>';
    echo "MULTIPLICACIÓN: $num1 x $num2 = ".$num1*$num2.'<br/>';
    echo "DIVISIÓN: $num1 / $num2 = ".$num1/$num2.'<br/>';
    echo "<hr/>";
    
        if($negrita){
        echo "</h1>";
    }
}

calculadora2(50, 10, true);

/* FUNCION DE CALCULADORA pasando varios parámetros obligatorios 
 * y el último opcional, devolviendo todo en una cadena.
 * Para ello creamos el String "resultado y lo devolvemos.
 * Para que nos imprima los resultados solamente tenemos que imprimir la llamada de la calculadora.
*/

function calculadora3($num1, $num2, $negrita=false) {
    
    $resultado ="";
    if($negrita){
        $resultado .="<h1>";
    }
    
    $resultado .="<h3>CALCULADORA:</h3>";
    $resultado .= "SUMA: $num1 + $num2 = ".$num1+$num2.'<br/>';
    $resultado .= "RESTA: $num1 - $num2 = ".$num1-$num2.'<br/>';
    $resultado .="MULTIPLICACIÓN: $num1 x $num2 = ".$num1*$num2.'<br/>';
    $resultado .="DIVISIÓN: $num1 / $num2 = ".$num1/$num2.'<br/>';
    $resultado .="<hr/>";
    
        if($negrita){
        $resultado .="</h1>";
    }
    return $resultado;
}

echo calculadora3(2, 8, true);
echo calculadora3(30, 7, true);

?>
