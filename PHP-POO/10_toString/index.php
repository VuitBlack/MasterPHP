<?php

/** El destructor, destruye el objeto cuando no va a ser usado más por la página web. */
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Ricardo Sandoval";
        $this->email = "ricardo@ricardo.com";
        echo "Creando el objeto <br/>";
    }
    public function __toString(){
        return "Hola, {$this->nombre}, estás registrado con: {$this->email}.";
    }
    public function __destruct(){
        echo "<br/> Destruyendo el objeto";
    }
}

$usuario = new Usuario();
echo $usuario;

?>