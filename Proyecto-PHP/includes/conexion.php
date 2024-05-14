<?php
    // Conexión con la BBDD
    $server = "localhost";
    $username = 'root';
    $password = 'root';
    $database = 'blog_master';
    $db = mysqli_connect($server, $username, $password, $database);
    
    mysqli_query($db, "SET NAMES 'utf8'");

    // Comprobación de la correcta conexión con la BBDD, si falla mostramos el error
    if (!$db){
        die("La conexión con la BBDD ha fallado: ".mysqli_connect_error());
    }

    // Comprobamos si no está iniciada la sesión e iniciamos la sesión.
    if(!isset($_SESSION)){
        session_start();
    }
?>