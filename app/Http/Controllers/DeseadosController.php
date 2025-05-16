<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class DeseadosController 
{
    public function userWishBooks()
    {
        $id = Auth::user()->id;
        $user = User::with('deseados')->findOrFail($id);
        return response()->json([
            'desired' => $user->deseados->count()
        ]);
    }
}
