<?php

/*  EJERCICIO 1
 * Tener una sesión que vaya contando números y aumentando su o disminuyendo
 * en función de si un parámetro "get_counter" está a 1 o 0
 */

session_start();

if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
            
}

if (isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['numero']++;
}

if (isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['numero']--;
}

?>

<h1>El valor de la sesión numero es:<?=$_SESSION['numero']?></h1>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a><br/>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a><br/>
