<?php
// Programación orientada a objetos en PHP (POO)

// Definir una clase (molde para crear mas objetos de tipo coche con características similares)
class Coche{

    //  Atributos o propiedades (variables), se pueden crear en una línea separada por comas.
    //  Public: podemos acceder a estos atributos desde cualquier lugar, dentro de la clase actual
    //  dentro de la clases que hereden está clase o fuera de la clase.
    //  Protected: se puede acceder desde la clase que los defie y desde clases que hereden está clase.
    //  Private: unicamente se puede acceder a ellos desde la clase que los define.
    protected string $marca ;
    private string $modelo;
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

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo=$modelo;
    }

    public function setMarca($marca){
        $this->marca=$marca;
    }
}
?>