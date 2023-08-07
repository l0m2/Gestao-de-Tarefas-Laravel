<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TarefaController;
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

Route::get('/', [UsuarioController::class, 'entrar'])->name('UsuarioController.entrar');
Route::post('/', [UsuarioController::class, 'login'])->name('UsuarioController.login');

Route::get('/criarConta', [UsuarioController::class, 'criarConta'])->name('UsuarioController.criarConta');

Route::get('/home/{id}', [TarefaController::class, 'home'])->name('TarefaController.home');

Route::get('/criarTarefa/{id}', [TarefaController::class, 'criarTarefa'])->name('TarefaController.criarTarefa');
Route::post('/criarTarefa/{id}', [TarefaController::class, 'store'])->name('TarefaController.store');

Route::post('/criarConta', [UsuarioController::class, 'store'])->name('UsuarioController.store');
Route::get('/usuario/{id}', [UsuarioController::class, 'usuario'])->name('UsuarioController.usuario');
Route::get('/detalhes/{id}/{idTarefa}', [TarefaController::class, 'detalhes'])->name('TarefaController.detalhes');