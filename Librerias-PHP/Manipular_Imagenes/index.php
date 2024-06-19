<?php

require_once '../vendor/autoload.php';

$foto_Original = "Mi_Foto.jpeg";
$save_In = 'FotoModif.jpeg';

$thumb = new PHPThumb\GD($foto_Original);

//redimensionar
$thumb->resize(200,200);

//recortar
$thumb->crop(80,60,30,30);
//$thumb->cropFromCenter(100);

$thumb->show();
$thumb->save($save_In);

?>