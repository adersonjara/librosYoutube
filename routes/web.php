<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SexoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/', [LibroController::class, 'index'])->name('libros.index');
Route::get('/', function () {
    return redirect('/libros');
});

Route::resource('libros', LibroController::class);

Route::resource('categorias', CategoriaController::class);

Route::resource('autores', AutorController::class);

Route::resource('idiomas', IdiomaController::class);

Route::resource('sexos', SexoController::class);

//Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');

//Route::get('/autores', [AutorController::class, 'index'])->name('autores.index');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
