<?php

if(isset($_POST)){
    //Conexión a la BBDD
    require_once 'includes/conexion.php';

    //Recoger los valores del formulario de actualización. (OPERADOR TERNARIO)
    //para securizar los datos introducidos usamos el comando "mysqli_real_escape_string"
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

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

    $guardar_usuario = false;

    if(count($errores)==0){
        //Si el array de errores está vacío ACTUALIZAMOS el usuario.
        $guardar_usuario = true;

        $usuario = $_SESSION['usuario'];
        
        $sql = "UPDATE usuarios SET ".
               "nombre = '$nombre', ".
               "apellidos = '$apellidos', ".
               "email = '$email' ".
               "WHERE id = ".$usuario['id'];
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['usuario']['nombre'] = $nombre;
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;

            $_SESSION['completado']="La actualización se ha completado con éxito";
        }else{
            $_SESSION['errores']['general']="Algo fallo al actualizar el usuario en la BBDD!!";
        }
        

    }else {
        $_SESSION['errores'] = $errores;
    }

}

header('Location: mis_datos.php');

?>