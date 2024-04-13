<?php

/* 
*Mostarar todos los números que haya entre dos números que  nos lleguen
 *  por la URL usando $_GET
 */

$cambio=0;

function impresion($numero1, $numero2){
    echo '<h3>Mostrar los números entre '.$numero1.' y '.$numero2.'.<br/>';
        for($i=$numero1;$i<=$numero2;$i++){
        echo $i.'<br/>';
    }
}


if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1=$_GET['numero1'];
    $numero2=$_GET['numero2'];

    if($numero1>$numero2){
        $cambio=$numero1;
        $numero1=$numero2;
        $numero2=$cambio;
        impresion($numero1,$numero2);
    }else{
         impresion($numero1,$numero2);
    }
}else{
    echo"<h1>Los parámetros GET de la URL no existen</h1>";
}

?>