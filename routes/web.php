<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

/*Si se deja simplemente así, el método get() buscará en el controlador
el método __invoke(), pero como este no está declarado, es
necesario usar rutas diferentes */
// Route::get('cursos', CursoController::class);

/* Así las rutas que tengan cursos/... podrán usarse,
en el array del segundo argumento, se indica el controlador que 
se usará y el segundo elemento es la función que se invocará */

Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');// name() le define un nombre identificativo a la ruta
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');// name() le define un nombre identificativo a la ruta
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');// name() le define un nombre identificativo a la ruta
