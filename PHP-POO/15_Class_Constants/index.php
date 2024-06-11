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

    function getUsuario(){
        return $this->usuario;
    }

    function setUsuario($usuario){
        $this->usuario=$usuario;
    }

    function getCategorio(){
        return $this->categoria;
    }

    function setCategoria($categoria){
        $this->categoria=$categoria;
    }

    function getEntrada(){
        return $this->entrada;
    }

    function setEntrada($entrada){
        $this->entrada=$entrada;
    }

    function informacion(){
        echo '<h3>Clase:</h3> '.__CLASS__.'<br/>';         //Nos muestra la clase
        echo '<h3>Método:</h3> '.__METHOD__.'<br/>';        //Nos muestra el método
        echo '<h3>Ruta Archivo:</h3> '.__FILE__.'<br/>';          //Nos muestra la ruta del archivo.
        echo '<h3>Namespace:</h3> '.__NAMESPACE__.'<br/>';     //Nos muestra el namespace del objeto.
    }
}
//objeto principal
$principal = new Principal();

$principal->informacion();

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
$usuario->userInformation();


?>


