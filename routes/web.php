<?php

use App\Http\Controllers\AlumnoController;
use App\Models\Alumno;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/alumnos', AlumnoController::class);// asigna las rutas a todas las funciones del controlller
//Route::get('alumnos', [AlumnoController::class, 'index']);// asigna la ruta a una funcion especifica del controlller
//Route::get('alumnos/create', [AlumnoController::class, 'create']);// asigna la ruta a una funcion especifica del controlller