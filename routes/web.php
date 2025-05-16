<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeseadosController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AutorController;
use App\Http\Middleware\UserVerify;
use App\Models\Author;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// rutas para la vista
Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/register', 'Registro');

Route::get('/agregarCat', function () {
    return view('adcategoria');
})->name('addC');

//ruta login
Route::post('/login', [LoginController::class, 'login']);

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

    Route::get('getAuthors', [AutorController::class, 'userAuthors']);

    Route::get('getBooks', [LibroController::class, 'userBooks']);

    Route::get('getWishBooks', [DeseadosController::class, 'userWishBooks']);

    Route::get('getCategorys', [CategoryController::class, 'userCategorys']);

});


//ruta para vista 404 not found
Route::fallback(function () {
    return view('templates.404');
});





