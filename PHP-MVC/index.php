<h1>Bienvenido a mi web con MCV</h1>

<?php

require_once 'controllers/usuario.php';

if(isset($_GET['controller']) && class_exists($_GET['controller']))
{
    $nameController = $_GET['controller'];
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