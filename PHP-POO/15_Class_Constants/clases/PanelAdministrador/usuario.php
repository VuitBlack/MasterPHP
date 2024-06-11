<?php
namespace PanelAdministrador;
class Usuario{
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre="Antonio López";
        $this->email="antonio@antonio.com";
    }
    
    function userInformation(){
        echo '<h3>Clase:</h3> '.__CLASS__.'<br/>';         //Nos muestra la clase
        echo '<h3>Método:</h3> '.__METHOD__.'<br/>';        //Nos muestra el método
        echo '<h3>Ruta Archivo:</h3>'.__FILE__.'<br/>';          //Nos muestra la ruta del archivo.
        echo '<h3>Namespace:</h3> '.__NAMESPACE__.'<br/>';     //Nos muestra el namespace del objeto.
    }
}

?>