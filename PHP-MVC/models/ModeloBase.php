<?php
require_once 'config/DataBase.php';

class ModeloBase{

    public $db;

    public function __construct()
    {
        $this->db = database::connect();    
    }

    public function getAll(){
        return "Obteniendo todos los DATOS de la BBDD.";
    }
}

?>