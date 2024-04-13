<?php

/* 
 * Para trabajar con directorios tenemos la sentencia "mkdir()" 
 * y para borrar con "rmdir()"
 * 
 */


if(!is_dir('mi_carpeta')){
    mkdir('mi_carpeta', 0777) or die('No se ha podido crear la carpeta');
    echo 'Carpeta CREADA correctamente.<br/>';
} else {
    echo 'YA EXISTE la carpeta.<br/>';
}
/*
if(is_dir('mi_carpeta')){
    rmdir('mi_carpeta');
    echo 'Carpeta BORRADA correctamente.<br/>';
}else{
    echo 'Carpeta no BORRADA, no exite la carpeta.<br/>';
}

*/

echo '<hr/><h3>Contenido de la carpeta</h3>';

if($gestor = opendir('mi_carpeta')){                //para windows poner ./ delante del nombre de la carpeta
    while(false != ($archivo = readdir($gestor)) ){
        if($archivo != '.' && $archivo !== '..')
           echo $archivo.'<br/>';
    }
}


?>


