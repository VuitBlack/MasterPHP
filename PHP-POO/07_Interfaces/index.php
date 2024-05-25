<?php

/** Una interface es un contrato en el que se definen unas  métodos y propiedades
    en un order predeterminado para ellas.
*/

interface Ordenador{
    public function  encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements Ordenador{
    private $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;

        return $this;
    }

    public function encender(){
        return "Ordenador encendido.";
    }

    public function apagar(){
        return "Ordenador apagado.";
    }

    public function reiniciar(){
        return "Reiniciando Ordenador";
    }

    public function desfragmentar(){
        return "Desfragmentando Ordenador";
    }
    
    public function detectarUSB(){
        return "Detectando USB del Ordenador";
    }    
}

$macintosh = new iMac();
$macintosh->setModelo('MacBook PRO 2019');

echo $macintosh->getModelo();