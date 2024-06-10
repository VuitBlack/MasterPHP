<?php
require_once 'autoload.php';

/** Espacios de trabajo y paquetes -> NAMESPACES
    Hay que incluir la sentencia 'namespaces MiEspacioTrabajo' 
    en todas las clases que vayan a pertenecer al epacio de trabajo.
*/
use MisClases\usuario, MisClases\categoria;
use MisClases\entrada;
use PanelAdministrador\usuario as Usuario_ADMIN;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();  
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario=$usuario;
    }

    public function getCategorio(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria=$categoria;
    }

    public function getEntrada(){
        return $this->entrada;
    }

    public function setEntrada($entrada){
        $this->entrada=$entrada;
    }

}
//objeto principal
$principal = new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);
var_dump($principal->entrada);

//Busqueda de métodos del programa
$metodos = get_class_methods($principal);
var_dump($metodos);

$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);

//objeto segundo namespace
$usuario = new Usuario_ADMIN();
var_dump($usuario);

/*comprobar si existe una clase 
si no queremos ver los warnings ponemos una arroba delante de la sentencia "class_exists"*/
$clase = @class_exists('PanelAdministrador\usuario2');
if($clase){
    echo 'La clase SI EXISTE en este programa';
}else{
    echo 'La clase NO EXISTE en este programa';
}

?>


