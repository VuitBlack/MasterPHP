<?php
require_once 'config/DataBase.php';

class ModeloBase{

    public $db;

    public function __construct()
    {
        $this->db = database::connect();    
    }

    public function getAll($tabla){
        $query=$this->db->query("SELECT * FROM $tabla ORDER BY id DESC");
        return $query;
    }
}

?>