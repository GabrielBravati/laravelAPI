<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('albuns', AlbumController::class);
Route::apiResource('faixas', FaixaController::class);