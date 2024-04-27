<?php

if(isset($_POST)){
    //Conexión a la BBDD
    require_once 'includes/conexion.php';
    if(!isset($_SESSION)){
        session_start();
    }

    //Recoger los valores del formulario de registro. (OPERADOR TERNARIO)
    //para securizar los datos introducidos usamos el comando "mysqli_real_escape_string"
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $contraseña = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;

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
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['contraseña']="Contraseña incorrecta, no cumple con los valores esperados";
    }

    $guardar_usuario = false;

    if(count($errores)==0){
        //Si el array de errores está vacío insertamos el usuario.
        $guardar_usuario = true;
        //cifrar la contraseña
        $password_segura = password_hash($contraseña, PASSWORD_BCRYPT, ['cost'=>4]);
        $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['completado']="El registro se ha completado con éxito";
        }else{
            $_SESSION['errores']['general']="Fallo al guardar el usuario en la BBDD!!";
        }
        

    }else {
        $_SESSION['errores'] = $errores;
    }

}

header('Location: index.php');

?>