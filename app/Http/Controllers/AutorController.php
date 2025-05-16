<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AutorController 
{

    public function userAuthors()
    {
        $id = Auth::user()->id;
        $user = User::with('autores')->findOrFail($id);
        return response()->json([
            'authors' => $user->autores->count()
        ]);
    }
}
