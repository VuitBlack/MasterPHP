<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    echo "<h1>Hola Mundo</h1>";
});

/*
GET: Obtener datos
POST: Enviar datos
PUT: Actualizar datos
DELETE: Eliminar datos
*/

Route::get('mostrar_fecha', function () {
    $titulo = "Mostar la fecha actual: ";
    $fecha = date('d/m/Y');
    return view('mostrarFecha', $arrayName = array(
        'titulo' => $titulo
        )
    );
});

Route::get('/pelicula/{titulo?}', function ($titulo = "Sin película seleccionada") {
    return view('pelicula', array(
        'titulo' => $titulo
        )
    );
});

Route::get('/tituloLibro/{titulo}/{year?}', function ($titulo, $year = 2025) {
    return view('tituloLibro', array(
        'titulo' => $titulo,
        'year' => $year
        )
    );
})->where(array(
    'tituloLibro' => '[A-Za-z]+',
    'year' => '[0-9]{4}'
    )
);
