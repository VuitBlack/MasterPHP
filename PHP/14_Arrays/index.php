<?php

/* 
 * ARRAYS
 * Es una colección de datos que están ordenados por un índice numério o alfanumérico.
 * bajo un único nombre.
 */

$pelicula = "Batman";

//Definicion de ARRAY
$peliculas = array('Batman', 'Spiderman', 'Ironman');
$cantantes = ['2pac', 'Drake', 'Rihana'];

//para ver el contendio podemos usar var_dump
//var_dump($peliculas);
//var_dump($peliculas[2]);

echo $peliculas[2].'<br/>';
echo $cantantes[0].'<br/>';
echo '<hr/>';

//para mostar todos los elementos de un array se hace mediante un bucle FOR o FOREACH
echo '<h2>Listado de Películas</h2>';
echo '<ul>';
for ($i=0; $i<count($peliculas);$i++){
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

echo '<hr/>';

echo '<h2>Listado de Cantantes</h2>';
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';   
}
echo '</ul>';
echo '<hr/>';


//Array asociativos son en los que asigno los indices manuales y los índices pueden ser alfanuméricos 

$personas = array (
  'nombre' => 'Ricardo',
  'apellidos' => 'Sandoval',
  'website' => 'google.com'
);
echo '<h2>Array Asociativo con indices alfanuméricos.</h2><br/>';
var_dump($personas);
echo '<hr/>';

//ARRAYS MULTIDIMENSIONALES

$contactos = array (
    array(
        'nombre' => 'Ricardo',
        'apellidos' => 'Sandoval',
        'website' => 'google.com'
        ),
    array(
        'nombre' => 'Rosa',
        'apellidos' => 'Pérez',
        'website' => 'brave.com'
    ),
    array(
        'nombre' => 'Ana Belén',
        'apellidos' => 'Pérez',
        'website' => 'duckduckgo.com'
    )
);

//var_dump($contactos);

echo '<h2>Array Multidimensional con indices alfanuméricos.</h2><br/>';
echo $contactos[1]['nombre'].'<br/>';
echo $contactos[2]['website'].'<br/><br/>';
echo '<strong>Lista los nombres del array</strong><br/>';
foreach ($contactos as $contacto) {
    echo $contacto['nombre'].'<br/>';
}

echo '<hr/>';

?>
