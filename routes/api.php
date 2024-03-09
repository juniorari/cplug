<?php

use App\Http\Controllers\Api\GrupoController;
use App\Http\Controllers\Api\MoedaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/moedas/atualiza-banco', [MoedaController::class, 'index'])->name('atualiza-banco');
Route::get('/moedas/listar', [MoedaController::class, 'listar'])->name('listar');


Route::resource('grupos', GrupoController::class);
