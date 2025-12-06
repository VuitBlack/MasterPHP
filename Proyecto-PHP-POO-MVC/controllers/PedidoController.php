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
            $save_linea = $pedido->save_linea();

                if ($save && $save_linea) {
                    $_SESSION['pedido'] = "complete";
                }else{
                    $_SESSION['pedido'] = "failed";
                }
            }else{
                $_SESSION['pedido'] = "failed";
            }
            header("Location:".base_url.'pedido/confirmado');
            
        }else{
            // Si no está identificado, redirige a la página de inicio
            header("Location:".base_url);
        }
        
    }

    public function confirmado(){
        if(isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $pedido = new Pedido();
            $pedido->setUsuarioId($identity->id);
            $pedido = $pedido->getOneByUser();
        }
        
        require_once 'views/pedido/confirmado.php';
    }

    public function mis_pedidos(){
        
        Utils::isIdentity();
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Pedido();
         
        //Sacar todos los pedidos del usuario
        $pedido->setUsuarioId($usuario_id);
        $pedidos = $pedido->getAllByUser();
        
        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle(){
        Utils::isIdentity();
        
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            //Obtener el pedido
            $pedido = new Pedido();
            $pedido->setId($id);
            $pedido = $pedido->getOne();

            //Obtener los productos
            $pedido_productos = new Pedido();
            $productos = $pedido_productos->getProductosByPedido($id);

            require_once 'views/pedido/detalle.php'; 
        }else{
            header("Location:".base_url.'pedido/mis_pedidos');
        }
        
          
    }

}
?>