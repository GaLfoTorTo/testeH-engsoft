<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

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

Route::get('/', [ClientesController::class, 'index']);
Route::get('/clientes/novo', [ClientesController::class, 'novo'])->name('clientes.novo');
Route::get('/clientes/editar/{id}', [ClientesController::class, 'editar'])->name('clientes.editar');
Route::get('/clientes/deletar/{id}', [ClientesController::class, 'deletar'])->name('clientes.deletar');
Route::post('/clientes/salvar', [ClientesController::class, 'salvar'])->name('clientes.salvar');
