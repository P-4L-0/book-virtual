<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Author;
use App\Models\Libro;

class DashboardController
{
    /**
     * Mostrar área de administración con últimos agregados
     */
    public function index(Request $request)
    {
        $userId = Auth::id();

        // Obtener último registro de cada tipo
        $lastCategories = Category::where('user_id', $userId)
            ->latest('created_at')
            ->take(3)
            ->get();

        $lastAuthors = Author::where('user_id', $userId)
            ->latest('created_at')
            ->take(3)
            ->get();

        $lastBooks = Libro::where('user_id', $userId)
            ->latest('created_at')
            ->take(3)
            ->get();

        return view('dashboard', compact('lastCategories', 'lastAuthors', 'lastBooks'));
    }
}

