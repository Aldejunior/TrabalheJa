<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdministradorController;

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

//Site

Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/entrar', [SiteController::class, 'login'])->name('site.login');

//Administrador

Route::get('/administradores', [AdministradorController::class, 'index'])->name('administradores.index');
Route::get('/administradores/novo', [AdministradorController::class, 'create'])->name('administradores.create');
Route::get('/administradores/editar/{administrador}', [AdministradorController::class, 'editar'])->name('administradores.editar');
Route::get('/administradores/{administrador}', [AdministradorController::class, 'show'])-> name('administradores.show');
Route::post('/administradores', [AdministradorController::class, 'store'])->name('administradores.store');
Route::delete('/administrador/{administrador}', [AdministradorController::class, 'destroy'])->name('administradores.destroy');
Route::put('/administradores/{administrador}', [AdministradorController::class, 'update'])->name('administradores.update');

// Prestador

Route::get('/prestadores', [PrestadoresController::class, 'index'])->name('prestadores.index');
Route::get('/prestadores/novo', [PrestadoresController::class, 'create'])->name('prestadores.create');
Route::get('/prestadores/{prestador}', [PrestadoresController::class, 'show'])->name('prestadores.show');
Route::get('/prestadores/editar/{prestador}', [PrestadoresController::class, 'editar'])->name('prestadores.editar');
Route::post('/prestadores', [PrestadoresController::class, 'store'])->name('prestadores.store');
Route::put('/prestadores/{prestador}', [PrestadoresController::class, 'update'])->name('prestadores.update');
Route::delete('/prestadores/{prestador}', [PrestadoresController::class, 'destroy'])->name('prestadores.destroy');

// Serviço  fazer no final de semana

Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos.index');
Route::get('/servicos/cadastro', [ServicosController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicosController::class, 'store'])->name('servicos.store');
Route::put('/servicos/{servico}', [ServicosController::class, 'update'])->name('servicos.update');
Route::delete('/servicos/{servico}', [ServicosController::class, 'destroy'])->name('servicos.destroy');
Route::get('/servicos/{servico}', [ServicosController::class, 'show'])->name('servicos.show');
Route::get('/servicos/editar/{servico}', [ServicosController::class, 'editar'])->name('servicos.editar');
