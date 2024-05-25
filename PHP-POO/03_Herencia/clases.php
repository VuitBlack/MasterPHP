<?php
// HERENCIA: La posibilidad de compartir atributos y métodos entre clases.
class Persona{
    public string $nombre;
    public string $apellidos;
    public int $altura;
    public int $edad;

    //GETTERS & SETTERS
    public function getNombre()
    {
        return $this->nombre;
    }
  
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
 
    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    //FUNCIONES DE PERSONAS
    public function hablar(){
        return "Estoy hablando.";
    }

    public function caminar(){
        return "Estoy caminando.";
    }
}

class Informatico extends Persona{

    public $lenguajes;
    public $experienciaProgramador;

    public function sabeLenguajes($lenguajes){
        $this->lenguajes=$lenguajes;
        return $this->lenguajes;
    }

    public function programar(){
        return "Soy Programador.";
    }

    public function reparaOrdenador(){
        return "Reparar Ordenadores.";
    }

    public function hacerOfimatica(){
        return "Estoy escribiendo un documento en Word.";
    }
}

class TecnicoRedes extends Informatico{
    
    public $auditarRedes;
    public $experienciaRedes;

    public function auditoria() {
        return "Estoy auditando una red";
    }
}

?>