<?php
$error='faltan_datos';

if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad'])
        && !empty($_POST['email']) && !empty($_POST['pass'])){
    
    $error='OK';
    // creamos variables para guardar los datos que recibimos por $_POST
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
}else{
    $error='faltan_datos';
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
        
    </body>
</html>
    