<?php

class NotaController{

    public function list(){
        //Modelo
        require_once 'models/nota.php';

        //Controlador - Logica de la acción
        $nota = new Nota();

        $notas=$nota->getAll('notas');
        
        //Vista
        require_once 'views/nota/listar.php';

    }

    public function create(){
        //Modelo
        require_once 'models/nota.php';

        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripción de mi nota dede PHP MVC");
        $save = $nota->save();

        header("Location: index.php?controller=Nota&action=list");

    }

    public function delete(){
        
    }


}