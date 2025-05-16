<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\UserVerify;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;


// rutas para la vista
Route::view('/index', 'index');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/register', 'Registro');

Route::get('/agregarCat', function () {
    return view('adcategoria');
})->name('addC');



//ruta para vista 404 not found
Route::fallback(function () {
    return view('templates.404');
});

//ruta login
Route::post('/login', [LoginController::class, 'login']);

//ruta logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//ruta registro

Route::get('/register', [RegistroController::class, 'registerForm'])->name('register.form');
Route::post('/register', [RegistroController::class, 'register'])->name('register');

//rutas de usuario autenticado
Route::middleware(UserVerify::class)->group(function () {

     Route::get('/home', function () {
        return view('inicio');
    })->name('home');

    Route::get('/mislibros', function () {
        return view('mislibros');
    })->name('books');

    Route::get('/deseados', function () {
        return view('deseados');
    })->name('desired');

    Route::get('/categorias', function () {
        return view('categorias');
    })->name('categorys');

    Route::get('/autores', function () {
        return view('autores');
    })->name('authors');

    Route::get('/agregar', function () {
        return view('agregar');
    })->name('add');



});





