<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController
{
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
}
