<!-- 
    URL DE LA WEB 

    http://localhost/masterphp/Proyecto-PHP-POO-MVC/        
-->

<?php
session_start();
require_once 'AutoLoad.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';

function show_error(){
    $error = new errorController();
    $error->index();
}

// Se crea la variable fuera del if para que la comprobación de la clase funcione.
if (isset($_GET['controller'])) {
    $nameController = $_GET['controller'] . 'Controller';

} elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
    $nameController = controller_default;

} else {
    show_error();
    exit();
}

if (class_exists($nameController)) {
    $controller = new $nameController();

    if (isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $action = $_GET['action'];
        $controller->$action();

    } elseif(!isset($_GET['controller']) && !isset($_GET['action'])){
        $action_default = action_default;
        $controller->$action_default();

    } else {
        show_error();
    }
} else {
    show_error();
}

require_once 'views/layout/footer.php';
