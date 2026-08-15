<?php

use Illuminate\Support\Facades\Route;
use App\Models\Image;

Route::get('/', function () {

    $images = Image::all(); // Obtenemos todas las imágenes de la base de datos
    foreach ($images as $image) {
        // Aquí puedes hacer algo con cada imagen, como mostrar su nombre o ruta
        echo '<strong>Nombre imagen: </strong>' . $image->image_path . '<br>'; // Por ejemplo, mostramos la ruta de la imagen
        echo '<strong>Descripción: </strong>' . $image->description . '<br>'; // Mostramos la descripción de la imagen
        echo '<strong>Subido por: </strong>' . $image->user->name .' '. $image->user->surname . '<br>'; // Mostramos el nombre del usuario que subió la imagen
        if($image->comments) {
            echo '<strong>Comentarios: </strong><br>'; // Mostramos un título para los comentarios
            foreach ($image->comments as $comment) {
                echo '<strong>Por: </strong>' . $comment->user->name .' '. $comment->user->surname . ':  '; // Mostramos el nombre del usuario que hizo el comentario
                echo $comment->content . '<br>'; // Mostramos el contenido del comentario
                
            }
        } else {
            echo '<strong>Comentario: </strong> No hay comentarios para esta imagen.<br>';
        }

        echo 'LIKES: ' . $image->likes->count() . '<br>'; // Mostramos la cantidad de likes de la imagen

        echo '<hr>'; // Separador entre imágenes
    }
    die(); // Detenemos la ejecución para que no se cargue la vista 'welcome'

    return view('welcome');
});

use Illuminate\Support\Facades\File;

Route::get('/mostrar-imagen/{filename}', function ($filename) {
    // Le decimos que busque en la carpeta 'Images' de la raíz (base_path)
    $path = base_path('Images/' . $filename);

    // Si la imagen no existe, devolvemos un error 404
    if (!File::exists($path)) {
        abort(404);
    }

    // Si existe, le entregamos el archivo al navegador
    return response()->file($path);
});
