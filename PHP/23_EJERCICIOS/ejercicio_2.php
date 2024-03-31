<?php

/* 
 * 1. Una función.
 * 2. Debe validar un email con filter_var
 * 3. Recoger una variable por get y validarla
 * 4. Mostrar el resultado.
 */


function validarEmail($email){
    $status = 'No valido';
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = 'Valido';  
    }
    
    return $status;
}

if (isset($_GET['email'])){
    echo validarEmail($_GET['email']);
    
}else{
    echo 'Pasa por \'GET\' un email...';
}
