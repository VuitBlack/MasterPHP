<?php

require_once 'AutoLoad.php';

// Se crea la variable fuera del if para que la comprobación de la clase funcione.
if(isset($_GET['controller'])){
    $nameController = $_GET['controller'].'Controller';
}else{
    echo 'La página que buscas no existe.';
    exit();
}

if(isset($nameController) && class_exists($nameController))
{
    $controller = new $nameController();

    if(isset($_GET['action']) && method_exists($controller, $_GET['action']))
    {
        $action=$_GET['action'];
        $controller->$action();
    }else
    {
        echo 'La página que buscas no existe.';
    }
}else
{
    echo 'La página que buscas no existe.';
}


?>