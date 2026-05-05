<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index()
    {
        $frutas = DB::table('frutas')->get();
        return view('fruta.index', ['frutas' => $frutas]);
    }

    public function detail($id)
    {
        $fruta = DB::table('frutas')->where('id', $id)->first();
        return view('fruta.detail', ['fruta' => $fruta]);
    }

    public function lastFirst()
    {
        $frutas = DB::table('frutas')->orderBy('id', 'desc')->get();
        return view('fruta.lastfirst', ['frutas' => $frutas]);
    }

    public function crear()
    {
        return view('fruta.create');
    }

    public function save(Request $request)
    {
        //Guarda el registro en la BBDD
        $frutas = DB::table('frutas')->insert([

            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => $request->input('fecha'),
        ]);

        return redirect()->action([FrutaController::class, 'index'])->with('status', 'Fruta creada correctamente');
    }

    public function delete($id)
    {
        $frutas = DB::table('frutas')->where('id', $id)->delete();
        return redirect()->action([FrutaController::class, 'index'])->with('status', 'Fruta eliminada correctamente');
    }


    public function edit($id)
    {
        //Obtiene el registro a actualizar
        $fruta = DB::table('frutas')->where('id', $id)->first();

        //envía el registro a la vista y rellena los campos del formulario
        return view('fruta.create', ['fruta' => $fruta]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $frutas = DB::table('frutas')->where('id', $id)->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => $request->input('fecha'),
        ]);

        return redirect()->action([FrutaController::class, 'index'])->with('status', 'Fruta actualizada correctamente');
    }

}
