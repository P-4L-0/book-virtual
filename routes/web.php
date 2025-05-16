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
use App\Http\Controllers\RegistroController;


// rutas para la vista
Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/register', 'Registro');

//ruta login
Route::post('/login', [LoginController::class, 'login']);

//ruta logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//ruta registro

Route::get('/register', [RegistroController::class, 'registerForm'])->name('register.form');
Route::post('/register', [RegistroController::class, 'register'])->name('register');

//rutas de usuario autenticado
Route::middleware(UserVerify::class)->group(function () {

    Route::get('/home', [LibroController::class, 'show'])->name('home');

    Route::get('/deseados', function () {
        return view('deseados');
    })->name('desired');

    Route::get('/categorias', [CategoryController::class, 'misCategorias'])->name('misCategorias');

    Route::get('/autores', function () {
        return view('autores');
    })->name('authors');

    Route::get('/agregar', function () {
        return view('agregar');
    })->name('add');

    Route::get('/agregarCat', function () {
        return view('adcategoria');
    })->name('addC');

    Route::get('/agregarAut', function () {
        return view('addAutores');
    })->name('addA');

    Route::post('/agregarCat', [CategoryController::class, 'store'])->name('agregarCat');

    Route::get('/autores', [AutorController::class, 'index']);

    Route::get('/formularioAutor', function () {
        return view('addAutores');
    })->name('addAuthors');

    Route::post('/agregarAutor', [AutorController::class, 'store']);

    Route::get('/addLibros', [LibroController::class, 'createAddLibros'])->name('addLibros');

    Route::post('/addLibros', [LibroController::class, 'store'])->name('addLibros');

    Route::get('/mislibros', [LibroController::class, 'misLibros'])->name('misLibros');



    Route::get('getAuthors', [AutorController::class, 'userAuthors']);

    Route::get('getBooks', [LibroController::class, 'userBooks']);

    Route::get('getWishBooks', [DeseadosController::class, 'userWishBooks']);

    Route::get('getCategorys', [CategoryController::class, 'userCategorys']);

    Route::get('getLastBooks', [LibroController::class, 'lastBooks']);

});


//ruta para vista 404 not found
Route::fallback(function () {
    return view('templates.404');
});





