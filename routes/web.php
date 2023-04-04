<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\ServicosController;


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


Route::get('/prestadores', [PrestadoresController::class, 'index'])->name('prestadores.index');

Route::get('/home', [PrestadoresController::class, 'home'])->name('prestadores.home');

Route::get('/prestadores/novo', [PrestadoresController::class, 'create'])->name('prestadores.create');

Route::post('/prestadores', [PrestadoresController::class, 'store'])->name('prestadores.store');

Route::get('/servico', [ServicosController::class, 'index'])->name('servicos.index');

