<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hello_World', function () {
    echo "<h1>Hola Mundo</h1>";
    echo "<h2>Este es mi primer proyecto con Laravel 12</h2>";
});


use App\Http\Controllers\PeliculaController;

//Enviamos un parámetro opcional el número de página a la acción index del controlador PeliculaController
Route::get('/peliculas/{pagina?}', [PeliculaController::class, 'index']);

Route::get('/detalle', [PeliculaController::class, 'detalle'])->name('detalle.pelicula');

Route::get('/redirigir', [PeliculaController::class, 'redirigir']);

Route::get('/detalle_1/{year?}', [PeliculaController::class, 'detalle_1'])->middleware(\App\Http\Middleware\TestYear::class);

Route::resource('usuario', UsuarioController::class);



/*  Métodos http:
 GET: Obtener datos
 POST: Enviar datos
 PUT: Actualizar datos
 DELETE: Eliminar datos */

/*
 Route::get('mostrar_fecha', function () {
 $titulo = "Mostar la fecha actual: ";
 return view('mostrarFecha', $arrayName = array(
 'titulo' => $titulo
 )
 ); });
 Route::get('/pelicula/{titulo?}', function ($titulo = "Sin película seleccionada") {
 return view('pelicula', array(
 'titulo' => $titulo
 )
 ); });
 Route::get('/tituloLibro/{titulo}/{year?}', function ($titulo, $year = 2025) {
 return view('tituloLibro', array(
 'titulo' => $titulo,
 'year' => $year
 )
 ); })->where(array(
 'tituloLibro' => '[A-Za-z]+',
 'year' => '[0-9]{4}' ) );
 Route::get('/listado-peliculas', function () {
 $titulo = "Listado de películas";
 $peliculas = array(
 'Matrix',
 'El Padrino',
 'Reservoir Dogs',
 'Django Unchained',
 'Pulp Fiction'
 );
 return view('peliculas.listado', array(
 'titulo' => $titulo,
 'peliculas' => $peliculas
 )
 ); });
 // Con with se puede enviar variables a la vista igual que con array Route::get('/listado-peliculas-2', function () {
 $titulo = "Listado de películas 2";
 $peliculas = array(
 'Iron Man',
 'Spiderman',
 'Avengers',
 'X-Men',
 'Guardianes de la Galaxia'
 );
 return view('peliculas.listado_2')
 ->with('titulo', $titulo)
 ->with('peliculas', $peliculas); });
 Route::get('/pagina-generica', function () {
 return view('pagina'); });
 */