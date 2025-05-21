<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Libro;
<<<<<<< Updated upstream
=======
use App\Models\Category;
use App\Models\Author;
>>>>>>> Stashed changes
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\SearchableTrait; // IMPORTA el trait

class LibroController
{
    use SearchableTrait; // USA el trait

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

<<<<<<< Updated upstream

=======
    public function store(Request $request)
    {
        $userId = Auth::id();

        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'categoria_id' => [
                'required',
                function ($attribute, $value, $fail) use ($userId) {
                    if (!Category::where('id', $value)->where('user_id', $userId)->exists()) {
                        $fail('La categoría seleccionada no es válida.');
                    }
                }
            ],
            'autor_id' => [
                'required',
                function ($attribute, $value, $fail) use ($userId) {
                    if (!Author::where('id', $value)->where('user_id', $userId)->exists()) {
                        $fail('El autor seleccionado no es válido.');
                    }
                }
            ],
            'imagen' => 'nullable|image|max:2048'
        ]);

        $rutaImagen = null;
        if ($request->hasFile('imagen')) {
            $rutaImagen = $request->file('imagen')->store('libros', 'public');
        }

        Libro::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'category_id' => $request->categoria_id,
            'author_id' => $request->autor_id,
            'user_id' => $userId,
            'imagen' => $rutaImagen
        ]);

        return redirect()->route('addLibros')->with('success', 'Libro agregado correctamente.');
    }

    public function misLibros(Request $request)
    {
        $userId = Auth::user()->id;
        $buscar = $request->input('buscar'); // CAMBIO: parámetro 'buscar'

        $query = Libro::with(['autor', 'categoria'])
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc');

        // Aplica filtro usando el trait con los campos que quieres buscar
        $query = $this->applySearchFilter($query, $request, ['titulo', 'descripcion']);

        $libros = $query->get();

        $favoritos = DB::table('librosdeseados')
            ->where('user_id', $userId)
            ->pluck('id_libro')
            ->toArray();

        return view('misLibros', compact('libros', 'favoritos', 'buscar'));
    }

    public function createAddLibros()
    {
        $userId = Auth::user()->id;

        $categorias = Category::where('user_id', $userId)->get();
        $autores = Author::where('user_id', $userId)->get();

        return view('addLibros', compact('categorias', 'autores'));
    }

    public function toggleFavorito(Request $request, $id)
    {
        $userId = Auth::id();

        $libro = Libro::findOrFail($id);

        $existe = DB::table('librosdeseados')
            ->where('user_id', $userId)
            ->where('id_libro', $id)
            ->exists();

        if ($existe) {
            DB::table('librosdeseados')
                ->where('user_id', $userId)
                ->where('id_libro', $id)
                ->delete();
            return response()->json(['favorito' => false]);
        } else {
            DB::table('librosdeseados')->insert([
                'user_id' => $userId,
                'id_libro' => $id,
                'author_id' => $libro->author_id,
                'category_id' => $libro->category_id,
                'titulo' => $libro->titulo,
                'imagen' => $libro->imagen,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return response()->json(['favorito' => true]);
        }
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);

        // Elimina los registros en la tabla librosdeseados relacionados
        DB::table('librosdeseados')->where('id_libro', $id)->delete();

        // Elimina la imagen solo si existe en el disco público
        if ($libro->imagen && \Storage::disk('public')->exists($libro->imagen)) {
            \Storage::disk('public')->delete($libro->imagen);
        }

        $libro->delete();

        return redirect()->back()->with('success', 'Libro eliminado correctamente.');
    }

>>>>>>> Stashed changes
}
