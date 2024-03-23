<?php

//Variables superglobales:
//Son variables que están presentes y disponibles en todo el ambito del Script que nosotros hacemos.

//Variables de Servidor.

// para obtener la URL del servidor.
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '</h1>';

// para obtener el dominiodel servidor.
echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>';

// para obtener el software del servidor.
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';

?>