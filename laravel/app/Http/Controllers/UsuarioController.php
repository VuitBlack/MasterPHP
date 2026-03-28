<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "<h1>Listado de usuarios</h1>";
        die();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "<h1>Crear usuario</h1>";
        die();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo "<h1>Guardar usuario</h1>";
        die();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "<h1>Mostrar usuario</h1>";
        die();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    //
    }
}
