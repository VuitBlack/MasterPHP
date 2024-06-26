<?php
// Programación orientada a objetos en PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con características similares)
class Coche{

    // Atributos o propiedades (variables), se pueden crear en una línea separada por comas.
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $color = "Rojo";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    // Métodos son acciones que puede hacer una clase (antes funciones)
    public function getColor(){
        // this = buscar en la clase la propiedad "X"
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }
}

// CREAR UN OBJETO O INSTANCIAR LA CLASE

$coche = new Coche();

// Usar MÉTODOS.
echo $coche->getVelocidad().'<br/>';

$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor().'<br/>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo "La velocidad del coche es: ".$coche->getVelocidad().'<br/>';

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");


var_dump($coche);
var_dump($coche2);

?>