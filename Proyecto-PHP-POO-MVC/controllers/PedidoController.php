<?php
require_once 'models/pedido.php';

class pedidoController{
    public function index(){
        
        require_once 'views/pedido/index.php';
    }

    public function add(){

        //Si está identificado procesa el pedido guardando datos en la base de datos
        if (isset($_SESSION['identity'])) {
            //Recoger datos del formulario, de la sesión de usuario y de la sesión del carrito.
            $usuario_id = $_SESSION['identity']->id;

            $provincia = isset($_POST['provincia']) ? $_POST['provincia'] : false;
            $localidad = isset($_POST['localidad']) ? $_POST['localidad'] : false;
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : false;

            $stats = Utils::statsCarrito();
            $coste = $stats['total'];

            if ($provincia && $localidad && $direccion) {
            $pedido = new Pedido();
            $pedido->setUsuarioId($usuario_id);
            $pedido->setProvincia($provincia);
            $pedido->setLocalidad($localidad);
            $pedido->setDireccion($direccion);
            $pedido->setCoste($coste);

            //Guardar el pedido en la base de datos
            $save = $pedido->save();
                if ($save) {
                    $_SESSION['pedido'] = "complete";
                }else{
                    $_SESSION['pedido'] = "failed";
                }
            }else{
                $_SESSION['pedido'] = "failed";
            }
        }else{
            // Si no está identificado, redirige a la página de inicio
            header("Location: " . base_url);
        }
    }

}

?>