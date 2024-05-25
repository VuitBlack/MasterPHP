<?php

/** Los TRAITS permiten crear métodos que sean compartidos por diferentes clases. */
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es: ".$this->nombre."</h1>";
    }
}

class Car{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Person{
    public $nombre;
    public $apellidos;

    use Utilidades;
}

class VideoGame{
    public $nombre;
    public $anio;

    use Utilidades;
}

$coche = new Car();
$coche->nombre = "Ferrari Testarossa";
$coche->mostrarNombre();

$persona = new Person();
$persona->nombre = "Michael Jordan";
$persona->mostrarNombre();

$videojuego = new VideoGame();
$videojuego->nombre = "GTA 4";
$videojuego->mostrarNombre();

?>