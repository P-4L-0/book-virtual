<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Libro;
use App\Models\Category;
use App\Models\Author;


use Illuminate\Http\Request;

class LibroController
{

    public function show()
    {
        $libros = Libro::with(['categoria', 'autor'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        return view('inicio', compact('libros'));
    }

    public function userBooks()
    {
        $id = Auth::user()->id;
        $user = User::with('libros')->findOrFail($id);
        return response()->json([
            'books' => $user->libros->count()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'categoria_id' => 'required|exists:categorias,id',
            'autor_id' => 'required|exists:autores,id',
        ]);

        Libro::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'categoria_id' => $request->categoria_id,
            'autor_id' => $request->autor_id,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('libros.create')->with('success', 'Libro agregado correctamente.');
    }
    public function createAddLibros()
    {
        $categorias = Category::all();
        $autores = Author::all();

        return view('addLibros', compact('categorias', 'autores'));
    }
}
