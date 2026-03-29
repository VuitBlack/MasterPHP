<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    //Los controladores tienen acciones que son funciones
    public function index($pagina = 1)
    {
        $titulo = "Listado de mis películas";
        return view('pelicula.index', [
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    public function detalle()
    {
        return view('pelicula.detalle');
    }

    public function detalle_1($year = null)
    {
        return view('pelicula.detalle_1');
    }


    public function redirigir()
    {
        return redirect()->action([
            \App\Http\Controllers\PeliculaController::class,
            'detalle'
        ]);
    }
}
