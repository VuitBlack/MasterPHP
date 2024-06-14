<?php

class NotaController{

    public function list(){
        //Modelo
        require_once 'models/nota.php';

        //Controlador - Logica de la acción
        $nota = new Nota();
        $nota->setNombre("Hola");
        $nota->setContenido("Hola Mundo PHP -> MVC");

        //Vista
        require_once 'views/nota/listar.php';

    }

    public function create(){

    }

    public function delete(){
        
    }


}