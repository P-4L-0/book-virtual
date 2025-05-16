<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function userBooks()
    {
        $id = Auth::user()->id;
        $user = User::with('libros')->findOrFail($id);
        return response()->json([
            'books' => $user->libros->count()
        ]);
    }
}
