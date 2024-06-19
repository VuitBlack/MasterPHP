<?php

require_once '../vendor/autoload.php';

//Conexión a BBDD
$conexion=new mysqli("localhost", "root","root","notas_mvc");
$conexion->query("SET NAMES 'utf8'");

//Consulta a contar elementos totales
$consulta = $conexion->query("SELECT COUNT(id) as 'total' FROM notas");
$numero_elementos = $consulta->fetch_object()->total;

//Numero de elementos por pagina
$num_element_pagina = 2;

//Hago la paginación
$pagination=new Zebra_Pagination();

//Número total de elementos a paginar
$pagination->records($numero_elementos);

//Número de elementos por página
$pagination->records_per_page($num_element_pagina);

$actualPage = $pagination->get_page();  //obtengo la página actual de la url

$pageStart =(($actualPage - 1)*$num_element_pagina);
$sql = "SELECT * FROM notas LIMIT $pageStart,$num_element_pagina";
$notas = $conexion->query($sql);


echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';
while($nota = $notas->fetch_object()){
    echo "<h1>{$nota->titulo}</h1>";
    echo "<h3>{$nota->descripcion}</h3></hr>";
}

$pagination->render();

?>