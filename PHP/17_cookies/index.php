<?php

/* 
 * COOKIE:
 * Es un fichero que se almacena en el ordenador del usario que visita una WEB con el 
 * fín de recordar datos o rastrear información y comportamiento del usuario en la 
 * WEB que visita. En muchos casos se envían al servidor (comportamiento peligroso).
 * al estar en el equipo del cliente este las puede manipular.
 */

//Crear una cookie
//setcookie('nombre','Valor que solo puede ser texto',caducidad, ruta, dominio);

//Cookie básica
setcookie('micookie', 'valor de mi cookie');

//Cookie con expiración. 
//(operacion obtengo el time y lo multiplico por 60seg x 60min x 24horas x 365dias)
setcookie('oneyear','valor de mi cookie de 365 días', time()+(60*60*24*365));

//Redirección para ver las cookies header accede a la cabecera de la página
//con Location redireccionamos a otra página.
header('Location:show_cookies.php');


?>
