<?php
require_once 'coche.php';

$coche_1 = new Coche("Ferrari", "Aventador", "Rojo", 300, 500, 2);
$coche_2 = new Coche("Seat", "Panda", "Blanco", 120, 70, 4);
$coche_3 = new Coche("Citroen", "Xara", "Blanco", 160, 90, 5);
$coche_4 = new Coche("Opel", "Corsa", "Negro", 120, 65, 5);
$coche_5 = new Coche("Ford", "Fiesta", "Azul", 140, 80, 4);

$coche_1->color="Rosa";
$coche_1->setMarca("Audi");

var_dump($coche_1->getModelo());

var_dump($coche_1);
// var_dump($coche_2);
// var_dump($coche_3);
// var_dump($coche_4);
// var_dump($coche_5);

?>