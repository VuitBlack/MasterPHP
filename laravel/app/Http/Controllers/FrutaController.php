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

        return redirect()->action([FrutaController::class, 'index']);
    }

}
