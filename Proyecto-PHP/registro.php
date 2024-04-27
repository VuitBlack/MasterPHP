<?php

if(isset($_POST)){
    
    //Recoger los valores del formulario de registro. (OPERADOR TERNARIO)
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
    $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $contraseña = isset($_POST['password']) ? $_POST['password'] : false;

    //Array de errores
    $errores = array();

    //Validar los datos antes de guardarlos en la BBDD
    //Validar NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre']="Nombre incorrecto, no cumple con los valores esperados";
    }
    //Validar APELLIDOS
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/[0-9]/', $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos']="Apellidos incorrectos, no cumplen con los valores esperados";
    }
    //Validar EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{
        $email_validado = false;
        $errores['email']="Email incorrecto, no cumple con los valores esperados";
    }
    //Validar PASSWORD
    if(!empty($contraseña)){
        $paswword_validado = true;
    }else{
        $password_validado = false;
        $errores['contraseña']="Contraseña incorrecta, no cumple con los valores esperados";
    }

    $guardar_usuario = false;
    if(count($errores)==0){
        //Si el array de errores está vacío insertamos el usuario.
        $guardar_usuario = true;
    }

}



?>