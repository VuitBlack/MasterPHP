<?php

/*
 * CONSTANTES:
 * Son como las variables, un contenedor de información la cual no pede variar su contenido
 * para crear una constante usamos: define('nombreConstante','valorConstante');
 */

define('nombre', 'Ricardo Sandoval');
define('web', 'google.com');

// para usar una constante solamente la llamamos sin el $
echo '<h1>'.nombre.'</h1>';
echo '<h3>'.web.'</h3>';

//Las variables y las constantes pueden tener el mismo nombre
$web = 'www.dropbox.com';
echo $web.'</br></br>';

//CONSTANTES PREDEFINIDAS de PHP

echo PHP_OS.'</br>';   //nos muestra el SO que estamos usando
echo PHP_VERSION.'</br>';  //muestra la versión de PHP que estamos usando
echo PHP_EXTENSION_DIR.'</br>'; //muestra la ruta de los archivos de php.
echo __LINE__.'</br>'; //Muestra la linea de código en la que está
echo __FILE__.'</br>';  //Muestra la ruta completa de este archivo.
        
function holaMundo(){
    echo __FUNCTION__.'</br>'; //Muestra la función que contiene esta constante
}

holaMundo();



?>
