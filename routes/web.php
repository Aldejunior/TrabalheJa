<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\SiteController;

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

/**
 * Site
 */
Route::get('/', [SiteController::class, 'home'])->name('site.home');
Route::get('/entrar', [SiteController::class, 'login'])->name('site.login');


/**
 * Administrador
 */
    Route::get('/administrador', [AdministradorController::class, 'index'])->name('administradores.index');
    Route::get('/administrador/novo', [AdministradorController::class, 'create'])->name('administradores.create');
    Route::get('/administrador/editar/{administrador}', [AdministradorController::class, 'editar'])->name('administradores.editar');
    Route::get('/administrador/{administrador}', [AdministradorController::class, 'show'])-> name('administradores.show');

// Prestador
Route::get('/prestadores', [PrestadoresController::class, 'index'])->name('prestadores.index');
Route::get('/prestadores/novo', [PrestadoresController::class, 'create'])->name('prestadores.create');
Route::get('/prestadores/{prestador}', [PrestadoresController::class, 'show'])->name('prestadores.show');
Route::get('/prestadores/editar/{prestador}', [PrestadoresController::class, 'editar'])->name('prestadores.editar');

Route::post('/prestadores', [PrestadoresController::class, 'store'])->name('prestadores.store');
Route::put('/prestadores/{prestador}', [PrestadoresController::class, 'update'])->name('prestadores.update');
Route::delete('/prestadores/{prestador}', [PrestadoresController::class, 'destroy'])->name('prestadores.destroy');

// Serviço





Route::get('/servico', [ServicosController::class, 'index'])->name('servicos.index');

Route::get('/servico/cadastro', [ServicosController::class, 'create'])->name('servicos.create');
