<?php
// require_once 'Clases/usuario.php';
// require_once 'Clases/categoria.php';
// require_once 'Clases/entrada.php';

// AUTOLOAD se usa para cargar todas las clases de forma automática para no tener que cargar clase a clase en el archivo.
// para ello creamos un archivo con la extructura de nuestro archivo autoload.php
require_once 'autoload.php';

$usuario = new Usuario();
echo '<h1>'.$usuario->nombre.'<br/></h1>';
echo $usuario->email.'<br/><br/>';

$categoria = new Categoria();
echo '<h3>'.$categoria->nombre.'<br/></h3>';
echo $categoria->descripcion.'<br/><br/>';

$entrada = new Entrada();
echo '<h3>'.$entrada->titulo.'<br/></h3>';
echo $entrada->fecha.'<br/><br/>';


?>