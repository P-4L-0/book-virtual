<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeseadosController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AgregarController;
use App\Http\Middleware\UserVerify;

/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/
Route::view('/', 'index');
Route::view('/about', 'about');
Route::view('/login', 'login');
Route::view('/register', 'Registro');

Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegistroController::class, 'registerForm'])->name('register.form');
Route::post('/register', [RegistroController::class, 'register'])->name('register');

/*
|--------------------------------------------------------------------------
| Rutas protegidas con middleware (usuario autenticado)
|--------------------------------------------------------------------------
*/
Route::middleware(UserVerify::class)->group(function () {

    //deseados

    Route::get('/deseados', [DeseadosController::class, 'index'])->name('libros.deseados');
    Route::get('/deseados', [DeseadosController::class, 'index'])->name('deseados');
    Route::delete('/deseados/{id}', [DeseadosController::class, 'destroy'])->name('deseados.eliminar');
    Route::delete('/deseados/quitar/{id}', [DeseadosController::class, 'quitar'])->name('deseados.quitar');



    


    // Agregar (vista con lógica en el controlador)
    Route::get('/agregar', [AgregarController::class, 'index'])->name('agregar');

    // Home y vistas
    Route::get('/home', [LibroController::class, 'show'])->name('home');
    Route::view('/agregarCat', 'adcategoria')->name('addC');
    Route::view('/formularioAutor', 'addAutores')->name('addAuthors');

    // Categorías
    Route::get('/categorias', [CategoryController::class, 'misCategorias'])->name('misCategorias');
    Route::post('/agregarCat', [CategoryController::class, 'store'])->name('agregarCat');
    Route::delete('/categoria/{id}', [CategoryController::class, 'destroy'])->name('categoria.destroy');
    Route::get('/categoria/{id}', [CategoryController::class, 'show'])->name('categoria.show');

    // Autores
    Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');
    Route::post('/agregarAutor', [AutorController::class, 'store'])->name('autores.store');
    Route::delete('/autor/{id}', [AutorController::class, 'destroy'])->name('autor.destroy');
    Route::get('/autor/{id}', [AutorController::class, 'show'])->name('autor.show');

    // Libros
    Route::get('/addLibros', [LibroController::class, 'createAddLibros'])->name('addLibros');
    Route::post('/addLibros', [LibroController::class, 'store'])->name('addLibros');
    Route::get('/mislibros', [LibroController::class, 'misLibros'])->name('misLibros');
    Route::delete('/libros/{id}', [App\Http\Controllers\LibroController::class, 'destroy'])->name('libros.destroy');
    Route::post('/libros/{id}/toggle-favorito', [LibroController::class, 'toggleFavorito'])->name('libros.toggleFavorito')->middleware('auth');



    /*
    |--------------------------------------------------------------------------
    | Rutas API internas para obtener datos del usuario autenticado
    |--------------------------------------------------------------------------
    */
    Route::get('/getAuthors', [AutorController::class, 'userAuthors']);
    Route::get('/getBooks', [LibroController::class, 'userBooks']);
    Route::get('/getWishBooks', [DeseadosController::class, 'userWishBooks']);
    Route::get('/getCategorys', [CategoryController::class, 'userCategorys']);
    Route::get('/getLastBooks', [LibroController::class, 'lastBooks']);
});

/*
|--------------------------------------------------------------------------
| Ruta para 404 Not Found
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return view('templates.404');
});
