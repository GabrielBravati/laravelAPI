<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;


Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('albuns', AlbumController::class);
Route::apiResource('faixas', FaixaController::class);


/*
// Atualizar

Route::put('usuarios/{id}', [UsuarioController::class, 'update']);
Route::put('albuns/{id}', [AlbumController::class, 'update']);
Route::put('faixas/{id}', [FaixaController::class, 'update']);

// Deletar

Route::delete('usuarios/{id}', [UsuarioController::class, 'destroy']);
Route::delete('albuns/{id}', [AlbumController::class, 'destroy']);
Route::delete('faixas/{id}', [FaixaController::class, 'destroy']);

*/
