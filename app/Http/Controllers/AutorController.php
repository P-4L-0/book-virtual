<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AutorController extends Controller
{
       /**
     * Muestra la info del usuario
     * palo xd
     */
    public function userAuthors(){
        $id = Auth::user()->id;
        return view('inicio', [
            'autor' => User::with('autores')->findOrFail($id)
        ]);
    }
}
