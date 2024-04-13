<?php


/*
 * Con fopen abrimos el archivo y le asignacmos permisos de archivos:
 *      "r" lectura
 *      "w" escritura
 *      "x" ejecución
 *      "a+" permite lectura y escritura
 * Con fgets leemos el contenido del archivo lo almacenamos en una variable.
 *      Usamos el bucle while con el atributo !feof para leer todas las líneas.
 * Con fclose cerramos el archivo. Es importante cerrar para ahorrar memoria y por seguridad.
 */

// Abrir el archivo
$archivo = fopen('fichero_texto.txt', "a+");

// Leer el archivo
while (!feof($archivo)){
    $contenido = fgets($archivo);
    echo $contenido.'<br/>';
}

// Escribir en el archivo
fwrite($archivo, '<br/>Esto es una prueba de inserción de texto desde PHP');

// Cerrar archivo
fclose($archivo);

// Copiar un fichero
copy('fichero_texto.txt', 'Copia_fichero_texo.txt') or die('Error al copiar');

// Renombrar un fichero
rename('Copia_fichero_texo.txt', 'copia_fichero.txt');


// Eliminar un fichero
unlink('copia_fichero.txt') or die('Error al borar el archivo');

// Comprobar si un fichero existe o no
if(file_exists("fichero_texto.txt")){
    echo 'El archivo EXISTE en el directorio';
}else{
    echo 'El archivo NO EXISTE en el directorio';
}


?>