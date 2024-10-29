<?php

use App\Http\Controllers\VendedorController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/vendedor', [VendedorCgit ontroller::class, 'listarTodos']);

Route::post('/vendedor', [VendedorController::class, 'criar']);

Route::put('/vendedor/{id}', [VendedorController::class, 'editar']);

Route::delete('/vendedor/{id}', [VendedorController::class, 'remover']);

Route::get('/vendedor/{id}', [VendedorController::class, 'listarPeloId']);


//produto

Route::get('/produto', [ProdutoController::class, 'listarTodos']);

Route::post('/produto', [ProdutoController::class, 'criar']);

Route::put('/produto/{id}', [ProdutoController::class, 'editar']);

Route::delete('/produto/{id}', [ProdutoController::class, 'remover']);

Route::get('/produto/{id}', [ProdutoController::class, 'listarPeloId']);
