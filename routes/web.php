<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntidadController;

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
    return view('inicio');
})->name('inicio');

// Redireccion sea al inicio
Route::get('/home', function () {
    return redirect()->route('inicio');
});

// Ruta para el modulo entidades
Route::resource('entidades', EntidadController::class);

