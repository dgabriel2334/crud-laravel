<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Input;
use App\Http\Controllers\VeiculosController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClientController;

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

// Veiculos
Route::get('/veiculos', [VeiculosController::class, 'index']);
Route::get('/veiculos/{id}', [VeiculosController::class, 'show']);
Route::post('/veiculos', [VeiculosController::class, 'store']);
Route::post('/veiculos/{id}', [VeiculosController::class, 'update']);
Route::post('/veiculos/delete/{id}', [VeiculosController::class, 'destroy']);

// Categorias
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::post('/categorias/{id}', [CategoriaController::class, 'update']);
Route::post('/categorias/delete/{id}', [CategoriaController::class, 'destroy']);

// Visualização do cliente
Route::get('/', [ClientController::class, 'index']);