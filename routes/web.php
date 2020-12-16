<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class); 

Route::get('cursos', [CursoController::class, 'index']); 

Route::get('cursos/create', [CursoController::class, 'create']); 

Route::get('cursos/show/{nombre}', [CursoController::class, 'show']); 

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('users/ivan', function () {
    return "Ivan";
}); 

Route::get('users/{Nombre}/{Apellido?}', function ($nombre, $apellido = null) {
    return "Hola como estas: $nombre $apellido";
}); */