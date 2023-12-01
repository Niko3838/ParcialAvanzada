<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\LibroController;

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
    return view('libreria.libreria');
});

Route::get('/beanvides/libros', [LibroController::class, 'index']
)->middleware(['guest'])->name('beanvides/libros');

Route::get('/beanvides/areas', [AreaController::class, 'index']
)->middleware(['guest'])->name('beanvides/areas');

Route::get('/beanvides/presentacion', [LibreriaController::class, 'index']
)->middleware(['guest'])->name('beanvides/presentacion');
