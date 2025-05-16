<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function registerForm()
    {
        // Asegúrate de que este archivo exista: resources/views/registro.blade.php
        return view('registro');
    }

    public function register(Request $request)
    {
        // Validación del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Crear el nuevo usuario
        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

    

        // Redireccionar a la vista de inicio
        return redirect()->intended('home');
    }
}
