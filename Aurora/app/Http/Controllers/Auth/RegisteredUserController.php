<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50', 'regex:/^[\pL\s]+$/u'],
            'surname' => ['required', 'string', 'max:50', 'regex:/^[\pL\s]+$/u'],
            'nick' => ['required', 'string', 'max:50', 'unique:' . User::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:100', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'name.regex' => 'El nombre solo puede contener letras y espacios.',
            'surname.regex' => 'Los apellidos solo pueden contener letras y espacios.',
            'nick.unique' => 'Este nick ya está en uso, por favor elige otro.',
        ]);

        $user = User::create([
            'role' => 'user',
            'name' => $request->name,
            'surname' => $request->surname,
            'nick' => $request->nick,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
