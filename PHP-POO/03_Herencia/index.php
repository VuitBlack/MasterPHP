<?php
require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Ricardo");
var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(190);
echo $informatico->sabeLenguajes("HTML, CSS, JS, etc...");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);
?>