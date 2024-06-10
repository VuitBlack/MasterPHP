<?php
// AUTOLOAD se usa para cargar todas las clases de forma automática para no tener que cargar clase a clase en el archivo.
// para ello creamos un archivo con la extructura de nuestro archivo autoload.php
require_once 'autoload.php';

$usuario = new usuario();  //hay que tener en cuenta el que el objeto nuevo tiene que tener el mismo nombre que el archivo de la clase respetando mayusculas y minusculas.
echo '<h1>'.$usuario->nombre.'<br/></h1>';
echo $usuario->email.'<br/><br/>';

$categoria = new categoria(); //hay que tener en cuenta el que el objeto nuevo tiene que tener el mismo nombre que el archivo de la clase respetando mayusculas y minusculas.
echo '<h3>'.$categoria->nombre.'<br/></h3>';
echo $categoria->descripcion.'<br/><br/>';

$entrada = new entrada(); //hay que tener en cuenta el que el objeto nuevo tiene que tener el mismo nombre que el archivo de la clase respetando mayusculas y minusculas.
echo '<h3>'.$entrada->titulo.'<br/></h3>';
echo $entrada->fecha.'<br/><br/>';

?>


