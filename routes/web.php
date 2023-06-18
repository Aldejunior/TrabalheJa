<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrestadoresController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ContatoController;

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
Route::get('/entrar', [SiteController::class, 'login'])->name('login');
Route::post('/entrar',  [SiteController::class, 'store_login'])->name('site.login.store');
Route::get('/sair', [SiteController::class, 'logout'])->name('site.login.logout');
Route::get('/Servicos', [SiteController::class, 'servicos'])->name('site.servicos');
Route::get('/servico/{servico}', [SiteController::class, 'servico'])->name('site.servico');
//prestador

Route::get('/prestadores/novo', [PrestadoresController::class, 'create'])->name('prestadores.create');
Route::post('/prestadores', [PrestadoresController::class, 'store'])->name('prestadores.store');


// Prestador Serviço

Route::post('/prestadores/servico', [PrestadoresController::class, 'StorePrestadorServico'])->name('prestadores.servicos.store');


Route::get('/administradores/novo', [AdministradorController::class, 'create'])->name('administradores.create');
Route::post('/administradores', [AdministradorController::class, 'store'])->name('administradores.store');

Route::middleware('auth:adm')->group(function () {
    //
    //Administrador
    //
    Route::get('/administradores', [AdministradorController::class, 'index'])->name('administradores.index');
    Route::get('/administradores/editar/{administrador}', [AdministradorController::class, 'editar'])->name('administradores.editar');
    Route::get('/administradores/{administrador}', [AdministradorController::class, 'show'])->name('administradores.show');
    Route::delete('/administrador/{administrador}', [AdministradorController::class, 'destroy'])->name('administradores.destroy');
    Route::put('/administradores/{administrador}', [AdministradorController::class, 'update'])->name('administradores.update');

    //
    // Prestadores
    //

    Route::get('/prestadores', [PrestadoresController::class, 'index'])->name('prestadores.index');
    Route::get('/adm/prestador/{prestador}', [AdministradorController::class, 'prestador'])->name('administradores.prestador');

    //
    // servicos
    //

    Route::get('/servicos', [ServicosController::class, 'index'])->name('servicos.index');
    Route::get('/servicos/cadastro', [ServicosController::class, 'create'])->name('servicos.create');
    Route::post('/servicos', [ServicosController::class, 'store'])->name('servicos.store');
    Route::get('/servicos/editar/{servico}', [ServicosController::class, 'editar'])->name('servicos.editar');
    Route::put('/servicos/{servico}', [ServicosController::class, 'update'])->name('servicos.update');
    Route::get('/servicos/{servico}', [ServicosController::class, 'show'])->name('servicos.show');
    Route::delete('/servicos/{servico}', [ServicosController::class, 'destroy'])->name('servicos.destroy');

});

Route::middleware('auth:adm,pre')->group(function () {

    Route::get('/prestadores/home', [PrestadoresController::class, 'home'])->name('prestadores.home');
    Route::get('/prestador/{prestador}', [PrestadoresController::class, 'show'])->name('prestadores.show');
    Route::get('/prestadores/editar/{prestador}', [PrestadoresController::class, 'editar'])->name('prestadores.editar');
    Route::put('/prestadores/{prestador}', [PrestadoresController::class, 'update'])->name('prestadores.update');
    Route::delete('/prestadores/{prestador}', [PrestadoresController::class, 'destroy'])->name('prestadores.destroy');
    Route::get('/resgistro/{prestador}', [PrestadoresController::class, 'registro'])->name('prestadores.registro');
    // Route::get('/', [PrestadoresController::class, 'nav'])->name('layout.pres');
    Route::get('/pres/Servicos', [PrestadoresController::class, 'servicos'])->name('prestadores.servicos');
    Route::get('/pres/servico/{servico}', [PrestadoresController::class, 'servico'])->name('prestadores.servico');
    Route::get('/pres/perfil{prestador}', [PrestadoresController::class, 'prestador'])->name('prestadores.pres');


});

Route::get('/prestadores/{prestador}', [SiteController::class, 'prestador'])->name('site.prestador');
Route::get('https://wa.me/{prestador}', [SiteController::class, 'contato'])->name('site.contato');
