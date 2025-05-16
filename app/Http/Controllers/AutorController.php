<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AutorController
{

    public function userAuthors()
    {
        $id = Auth::user()->id;
        $user = User::with('autores')->findOrFail($id);
        return response()->json([
            'authors' => $user->autores->count()
        ]);
    }
    public function index()
    {
        // Obtener solo los autores del usuario autenticado
        $autores = Author::where('user_id', Auth::id())->get();

        // Pasar los autores a la vista
        return view('views.autores', compact('autores'));
    }
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'fecha_nacido' => 'required|date',
        ]);

        // Crear el autor con el ID del usuario autenticado
        $author = new Author();
        $author->nombre = $request->nombre;
        $author->nacionalidad = $request->nacionalidad;
        $author->fecha_nacido = $request->fecha_nacido;
        $author->user_id = Auth::id(); // Asigna el ID del usuario logueado

        $author->save();

        // Redireccionar con mensaje de éxito
        return redirect()->back()->with('success', 'Autor agregado correctamente.');
    }
}
