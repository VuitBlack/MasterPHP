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
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : false;
            $precio = isset($_POST['precio']) ? $_POST['precio'] : false;
            $stock = isset($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;

            if($nombre && $descripcion && $precio && $stock && $categoria){
                $producto = new Producto();
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setPrecio($precio);
                $producto->setStock($stock);
                $producto->setCategoriaId($categoria);

            //Guardar la imagen del producto
                $file = $_FILES['imagen'];
                $filename = $file['name'];
                $mimetype = $file['type'];

                if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype == "image/png" || $mimetype == "image/gif" || $mimetype == "image/bmp" || $mimetype == "image/webp"){
                    
                    if(!is_dir('uploads/images')){
                        mkdir('uploads/images',0777,true);
                    }
                    $producto->setImagen($filename);
                    move_uploaded_file($file['tmp_name'],'uploads/images/'.$filename);

                    //Guardar el producto
                    $save = $producto->save();
                    if($save){
                        $_SESSION['producto'] = "complete";
                    }else{
                        $_SESSION['producto'] = "failed";
                    }
                }else{
                    $_SESSION['producto'] = "failed";
                }
            }else{
                $_SESSION['producto'] = "failed";
            }
        }else{
            $_SESSION['producto'] = "failed";
        }
        header('Location:'.base_url.'producto/gestion');
    }

    public function editar(){
        var_dump($_GET);
    }

    public function eliminar(){
        Utils::isAdmin();

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $producto = new Producto();
            $producto->setId($id);

            $delete = $producto->delete();

            if($delete){
                $_SESSION['delete'] = 'complete';
            }else{
                 $_SESSION['delete'] = 'failed';
            }
        }else{
            $_SESSION['delete'] = 'failed';
        }

        header('Location:'.base_url.'producto/gestion');
    }


}

?>