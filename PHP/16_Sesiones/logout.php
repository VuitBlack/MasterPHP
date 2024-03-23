<?php

session_start();

session_destroy();  //Cierra la session.

//Si ahora volvemos a la pagina_1.php vemos que no está activa la sesión
//la página aparece en blanco sin el mensaje.

?>
