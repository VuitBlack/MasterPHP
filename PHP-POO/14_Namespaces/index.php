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
}
//objeto principal
$principal = new Principal();
var_dump($principal->usuario);
var_dump($principal->categoria);
var_dump($principal->entrada);

//objeto segundo namespace
$usuario = new Usuario_ADMIN();
var_dump($usuario);

?>


