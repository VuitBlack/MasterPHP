<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function config()
    {
        return view("user.config");
    }

    public function update(Request $request)
    {
        // 1. Obtener el usuario autenticado
        $user = Auth::user();
        $id = $user->id;

        // 2. Validar los campos del formulario
        $request->validate([
            'name' => ['required', 'string', 'max:50', 'regex:/^[\pL\s]+$/u'],
            'surname' => ['required', 'string', 'max:50', 'regex:/^[\pL\s]+$/u'],
            'nick' => ['required', 'string', 'max:50', Rule::unique('users', 'nick')->ignore($id)],
            'email' => ['required', 'string', 'email', 'max:100', Rule::unique('users', 'email')->ignore($id)],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'], // 'confirmed' valida contra password_confirmation

        ], [// Mensajes de error personalizados en español
            'name.regex' => 'El nombre solo puede contener letras y espacios.',
            'surname.regex' => 'Los apellidos solo pueden contener letras y espacios.',
        ]);

        // 3. Asignar los nuevos valores
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->nick = $request->input('nick');
        $user->email = $request->input('email');

        // Si el usuario introdujo una nueva contraseña, se encripta y actualiza
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // 4. Guardar los cambios en la base de datos con manejo de errores
        try {
            $user->save();
            return redirect()->route('config')->with('message', 'Los datos se han guardado correctamente.');
        } catch (\Exception $e) {
            return redirect()->route('config')->with('error', 'Ha ocurrido un error y los datos no se han podido guardar.');
        }
    }
}
