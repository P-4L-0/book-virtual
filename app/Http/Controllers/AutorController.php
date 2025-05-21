<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\SearchableTrait;

class AutorController 
{
    use SearchableTrait;

    public function userAuthors()
    {
        $id = Auth::user()->id;
        $user = User::with('autores')->findOrFail($id);
        return response()->json([
            'authors' => $user->autores->count()
        ]);
    }

    public function index(Request $request)
    {
        $query = Author::where('user_id', Auth::id());

        $query = $this->applySearchFilter($query, $request, ['nombre', 'nacionalidad']);

        $autores = $query->get();

        return view('autores', compact('autores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'nacionalidad' => 'required|string|max:255',
            'fecha_nacido' => 'required|date|before_or_equal:today',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $existe = Author::where('user_id', Auth::id())
            ->where('nombre', $request->nombre)
            ->exists();

        if ($existe) {
            return redirect()->back()
                ->withErrors(['nombre' => 'Ya has registrado un autor con este nombre.'])
                ->withInput();
        }

        $author = new Author();
        $author->nombre = $request->nombre;
        $author->nacionalidad = $request->nacionalidad;
        $author->fecha_nacido = $request->fecha_nacido;
        $author->user_id = Auth::id();

        if ($request->hasFile('foto')) {
            $rutaFoto = $request->file('foto')->store('autores', 'public');
            $author->foto = $rutaFoto;
        }

        $author->save();

        return redirect()->back()->with('success', 'Autor agregado correctamente.');
    }

    public function destroy($id)
    {
        // Buscar autor que pertenezca al usuario autenticado
        $autor = Author::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        // Eliminar la imagen del autor si existe
        if ($autor->foto && \Storage::disk('public')->exists($autor->foto)) {
            \Storage::disk('public')->delete($autor->foto);
        }

        // Eliminar el autor
        $autor->delete();

        return redirect()->back()->with('success', 'Autor eliminado correctamente.');
    }
}
