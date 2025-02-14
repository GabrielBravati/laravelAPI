<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('albuns', AlbumController::class);
Route::apiResource('faixas', FaixaController::class);