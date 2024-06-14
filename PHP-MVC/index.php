<!--  RUTAS PARA CARGAR LAS PÁGINAS
http://localhost:3000/PHP-MVC/?controller=Usuario&action=getAll
http://localhost:3000/PHP-MVC/?controller=Usuario&action=addUser
http://localhost:3000/PHP-MVC/?controller=Nota&action=list
-->

<h1>Bienvenido a mi web con MCV</h1>

<?php

require_once 'controllers/UsuarioController.php';
require_once 'controllers/NotaController.php';

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