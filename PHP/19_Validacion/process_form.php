<?php
$error='faltan_datos';

if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad'])
        && !empty($_POST['email']) && !empty($_POST['pass'])){
    
    $error='OK';
    // creamos variables para guardar los datos que recibimos por $_POST
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int)$_POST['edad'];   //Casteamos edad para convertilo a INT
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    //VALIDAR NOMBRE- comprobanos si es un STRING y si es una expresión regular de letras y espacios
    if(!is_string($nombre) || preg_match("/[0-9]+/", $nombre)){
        $error='nombre';
    }
    //VALIDAR APELLIDOS- comprobanos si es un STRING y si es una expresión regular de letras y espacios
    if(!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)){
        $error='apellidos';
    }
    //VALIDAR EDAD- comprobanos si es un ENTERO y si es un ENTERO para eso usamos FILTER_VALIDATE_INT
    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){
        $error='edad';
    }
    //VALIDAR EMAIL- comprobanos si es un STRING y si es un email para eso usamos FILTER_VALIDATE_EMAIL
    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error='email';
    }
    //VALIDAR PASSWORD- comprobanos la longitud que sea mayor que 5
    if(strlen($pass)<5){
        $error='pass';
    }
    
    //Para debuggear la validacion del formulario usamos
    /*
    var_dump($_POST);
    var_dump($error.'<br/>');
    die();  //este comando para la ejecución justo después del último var_dump para que podamos ver los resultados.
    */
    
}else{
    $error='faltan_datos'; 
}

if($error != 'OK'){
    header("Location:index.php?error=$error");
}
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Validación de formularios PHP</title>
    </head>
    <body>
        <?php if($error=='OK'): ?>
        <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <?php endif; ?>
    </body>
</html>
    