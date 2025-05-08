<?php

use App\Http\Controllers\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// rutas para la vista
Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/register', 'Registro');



//ruta para vista 404 not found
Route::fallback(function () {
    return view('templates.404');
});

//rutas post
Route::post('/login',[LoginController::class, 'login']);


