<?php

/* 
 * SESIÓN:
 * Una sesión es el periodo de tiempo en que el usuario ve una serie de
 * páginas y no necesita identificarse en cada página.
 * La sesión debe soportar:
 *      - Detectar que durante el transcurso de la navegación la sesión permanece invariable 
 *        hasta que el usuario cierre sesión o el navegador. 
 *      - Debe almacenar la información que pertenece a la sesión concreta iniciada por el usuario.
 */

//Iniciar la sesión.
session_start();

//Variable local.
$variable='Hola soy una variable normal';

//Variable de SESIÓN. se puede usar en cualquier página del DOMINIO.
$_SESSION['variable_persistente']= 'Esto es una sesión activa';

echo $variable.'<br/>';
echo $_SESSION['variable_persistente'];

?>
