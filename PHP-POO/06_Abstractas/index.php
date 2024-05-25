<?php

/**   Una clase abstracta es una clase que no se puede instanciar, no se pueden crear objetos con ella.
      Pero se puede usar para que otra case HEREDE de ella, definiendo su estrctura y 
      se puede usar para definir funcionalidades.
*/

abstract class Ordenador{

    public $encendido;

    abstract public function encender();

    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;

    public function arrancarSoftware(){
        $this->software = true;
    }

    public function encender(){
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->encender();
$ordenador->arrancarSoftware();
var_dump($ordenador);

$ordenador->apagar();
var_dump($ordenador);


?>