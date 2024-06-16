<?php
require_once 'ModeloBase.php';

class Nota extends ModeloBase{
    
    public $usuario_id;
    public $titulo;
    public $descripcion;
    public $fecha;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }
    
    public function save(){
        $sql = "INSERT INTO notas (usuario_id, titulo, descripcion, fecha) VALUES({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";

        $save = $this->db->query($sql);

        return $save;

    }

}

?>