<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
