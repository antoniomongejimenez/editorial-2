<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\MonografiaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('monografias', MonografiaController::class)
->middleware(['auth','can:solo-admin']);

Route::resource('articulos', ArticuloController::class);

Route::get('/monografias/{monografia}/autores', [MonografiaController::class, 'autores'])
->name('mostrarautores');

require __DIR__.'/auth.php';
