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

        //dd($request->all());
        Libro::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'category_id' => $request->categoria_id,
            'author_id' => $request->autor_id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('addLibros')->with('success', 'Libro agregado correctamente.');
    }

    public function misLibros()
    {
        $userId = Auth::user()->id;

        // Traemos todos los libros del usuario con autor y categoría
        $libros = Libro::with(['autor', 'categoria'])
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        

        // Pasamos a la vista
        return view('misLibros', compact('libros'));

    }

    public function createAddLibros()
    {
        $userId = Auth::user()->id;

        $categorias = Category::where('user_id', $userId)->get();
        $autores = Author::where('user_id', $userId)->get();

        return view('addLibros', compact('categorias', 'autores'));
    }
}
