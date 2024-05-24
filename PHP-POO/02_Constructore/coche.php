<?php
// Programación orientada a objetos en PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con características similares)
class Coche{

    // Atributos o propiedades (variables), se pueden crear en una línea separada por comas.
    public string $marca ;
    public string $modelo;
    public string $color;
    public int $velocidad;
    public int $hp;
    public int $plazas;

    // Constructor
public function __construct($marca, $modelo, $color, $velocidad, $hp, $plazas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->velocidad = $velocidad;
        $this->hp = $hp;
        $this->plazas = $plazas;
    }

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
?>