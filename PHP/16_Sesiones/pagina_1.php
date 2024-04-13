<?php

//Iniciamos la sesión.
session_start();

//verificamos imprimiendo por pantalla que la sesión está activa
echo $_SESSION['variable_persistente']; 

?>