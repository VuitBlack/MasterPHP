<?php

require_once '../vendor/autoload.php';

$frutas=array("Manzana", "Naranja", "Sandía", "Melon", "Papaya");

\FB::log($frutas);

$nombres=array("ejecutivo"=>"Ricardo", "Empleado"=>"Doraimon");

\FB::log($nombres);

echo "Hola Mundo!!  ".$nombres['ejecutivo'];

\FB::log("Muestra esto por consola");



?>