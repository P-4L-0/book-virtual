<?php

namespace App\Http\Controllers;
use App\Models\User;
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
}
