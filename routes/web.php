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

// Esta ruta post se encarga de recibir la entrada del formulario en la vista create
// para esto se asigna la ruta de la vista como primer argumento, segundo se define 
// a quién se dirige, el método store() del controlador CursoController
// y por último se le da un nombre a esta ruta
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

// la llaves indican un valor de variable que será enviado
Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');// name() le define un nombre identificativo a la ruta

// Ruta para modificar un registro

// Se le agrega el /edit para distinguirla de la ruta de arriba
// El nombre de la variable de la ruta debe coincidir con la del método
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

/* Ruta para procesar los datos a editar */

/* put() es el método recomendado por laravel cuando se quieren editar datos */
Route::put('curso/{curso}', [CursoController::class, 'update'])->name('cursos.update');


/* Esta ruta se encarga de eliminar un registro de la BD, laravel recomienda usar el 
método delete() para realizar esta acción.
Por convención el método en el controlador se debe llamar destroy() */
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');