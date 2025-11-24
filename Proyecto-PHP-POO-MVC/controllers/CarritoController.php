<?php
require_once 'models/producto.php';

class carritoController
{
    public function index()
    {
        if(isset($_SESSION['carrito'])){
            $carrito = $_SESSION['carrito'];
            require 'views/carrito/index.php';

        }else{
            require_once 'views/carrito/CarritoVacio.php';
        }
    }

    public function add()
    {
        if (isset($_GET['id'])) {
            $producto_id = $_GET['id'];
        } else {
            header('Location:' . base_url);
            exit;
        }
        if (isset($_SESSION['carrito'])) {
            $counter = 0;
            foreach($_SESSION['carrito'] as $indice => $elemento) {
                if($elemento['id_producto'] == $producto_id) {
                    $_SESSION['carrito'][$indice]['unidades']++;   //Abro la sesión  'carrito' tomo el 'indice' y en 'uniades' añado una con  ++
                    $counter++;     //incremento el contador 
                }
            }
        }
        if(!isset($counter) || $counter == 0) {
            //Conseguir producto
            $producto = new Producto();
            $producto->setId($producto_id);
            $producto = $producto->getOne();

            if (is_object($producto)) {
                $_SESSION['carrito'][] = array(
                    "id_producto" => $producto->id,
                    "precio" => $producto->precio,
                    "unidades" => 1,
                    "producto" => $producto
                );
            }
        }
        header('Location:' . base_url . 'carrito/index');
        exit;
    }
    
    public function remove() {
        
    }

    public function delete_all()
    {
        unset($_SESSION['carrito']);
        header('Location:' . base_url . 'carrito/index');
        exit;
    }
}
