<?php

$archivo = $_FILES['archivo'];

$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif') {
    
    if(!is_dir('images')){
        mkdir('images', 0777);
    }
    
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    header('Refresh:5; URL=index.php');
    echo '<h3>Imagen subida correctamente</h3><br/>';
    
} else {
    header('Refresh:5; URL=index.php');
    echo '<h3>Sube un archivo .jpg .jpeg .png o .gif</h3><br/>';
}

?>

