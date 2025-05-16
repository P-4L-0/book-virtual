<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Libro;
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


}
