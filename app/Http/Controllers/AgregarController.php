<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Author;
use App\Models\Libro;

class AgregarController
{
   public function index(){
    $userId = Auth::id();

    $lastCategories = Category::where('user_id', $userId)
        ->latest('created_at')->take(3)->get();

    $lastAuthors = Author::where('user_id', $userId)
        ->latest('created_at')->take(3)->get();

    $lastBooks = Libro::where('user_id', $userId)
        ->latest('created_at')->take(3)->get();

    return view('agregar', compact('lastCategories', 'lastAuthors', 'lastBooks'));
   }

}
