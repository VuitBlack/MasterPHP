<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if(isset($_COOKIE['micookie'])){
    unset($_COOKIE['micookie']);         //Se desactiva la cookie
    setcookie('micookie','',time()-100); //Se borra la cookie porque la hemos vaciado y le hemos dato un timestamp negativo está caducada
    
}else{
    echo 'No existe la cookie, no se ha borrado';
}

//Redirección para ver las cookies header accede a la cabecera de la página
//con Location redireccionamos a otra página.
header('Location:show_cookies.php');

?>
