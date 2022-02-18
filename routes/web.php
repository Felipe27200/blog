<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use App\Models\Curso;

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

Route::get('/', HomeController::class)->name('home');

/* Se le pasa la ruta identificativa y el controlador que
gestionará dichas rutas */
Route::resource('cursos', CursoController::class);

// Genera una ruta para una vista con contenido estático
// Parámetros: 1. La ruta 2. Nombre de la vista 
Route::view('nosotros', 'nosotros')->name('nosotros');