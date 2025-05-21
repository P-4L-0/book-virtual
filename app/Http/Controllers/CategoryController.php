<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\SearchableTrait;

class CategoryController
{
    use SearchableTrait;

    public function userCategorys()
    {
        $id = Auth::user()->id;
        $user = User::with('categorias')->findOrFail($id);
        return response()->json([
            'categorias' => $user->categorias->count()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('imagen')) {
            $imagePath = $request->file('imagen')->store('categorias', 'public');
        }

        $categoria = Category::create([
            'nombre' => $request->input('nombre'),
            'user_id' => Auth::id(),
            'imagen' => $imagePath,
        ]);

        return response()->json([
            'message' => 'Categoría creada exitosamente.',
            'categoria' => $categoria
        ], 201);
    }
<<<<<<< Updated upstream
=======

    public function misCategorias(Request $request)
    {
        $userId = Auth::id();

        $query = Category::where('user_id', $userId)
            ->withCount('libros')
            ->orderBy('nombre', 'asc');

        // Aplicar filtro de búsqueda usando el trait
        $query = $this->applySearchFilter($query, $request, ['nombre']);

        $categorias = $query->get();

        return view('categorias', compact('categorias'));
    }

    public function destroy($id)
    {
        $categoria = Category::findOrFail($id);

        if ($categoria->user_id !== Auth::id()) {
            return response()->json(['message' => 'No autorizado'], 403);
        }

        if ($categoria->imagen && \Storage::disk('public')->exists($categoria->imagen)) {
            \Storage::disk('public')->delete($categoria->imagen);
        }

        $categoria->delete();

        return response()->json(['message' => 'Categoría eliminada']);
    }
>>>>>>> Stashed changes
}
