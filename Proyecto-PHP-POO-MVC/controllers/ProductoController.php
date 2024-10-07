<?php

require_once 'models/producto.php';

class productoController{
    public function index(){
        require_once 'views/producto/destacados.php';
    }

    public function gestion(){

        //Compruebo si es ADMINISTRADOR
        Utils::isAdmin();

        $producto = new Producto();
        $productos = $producto->getAll();

        require_once 'views/producto/gestion.php';
    }

    public function crear(){
        //Compruebo si es ADMINISTRADOR
        Utils::isAdmin();

        require_once 'views/producto/crear.php';
    }

    public function save(){
        //Compruebo si es ADMINISTRADOR
        Utils::isAdmin();

        if(isset($_POST)){
            var_dump($_POST);
        }
    }
}

?>