<?php

/*
 * Para mostrar el valor de las cookies hay que usar $_COOKIE, que
 * es una variable superglobal y es un array asociativo.
 */

if(isset($_COOKIE['micookie'])){
    echo '<h1>'.$_COOKIE['micookie'].'</h1>';
}else{
    echo 'No existe la cookie';
}

if(isset($_COOKIE['oneyear'])){
    echo '<h1>'.$_COOKIE['oneyear'].'</h1>';
}else{
    echo 'No existe la cookie';
}

?>

<h1><a href="delete_cookies.php">Borrar las cookies</a></h1>