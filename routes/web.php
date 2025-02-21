<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;
use App\Http\Controllers\UsuarioController;

// Página Inicial - Login (Redireciona para a rota de login)

Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('home');
})->name('home');

// Rotas de Álbuns

Route::get('/albuns', [AlbumController::class, 'index'])->name('albuns.index');
Route::post('/albuns', [AlbumController::class, 'store'])->name('albuns.store');
Route::get('/albuns/create', [AlbumController::class, 'create'])->name('albuns.create');

// Rotas de Faixas

Route::get('/faixas', [FaixaController::class, 'index'])->name('faixas.index');
Route::get('/faixas/create', [FaixaController::class, 'create'])->name('faixas.create');
Route::post('/faixas', [FaixaController::class, 'store'])->name('faixas.store');

// Rotas de Usuários - Usando o Route::resource para CRUD

Route::resource('usuarios', UsuarioController::class);

Route::post('/logout', function () {
    Auth::logout();  // Desloga o usuário
    return redirect()->route('login');  // Redireciona de volta para a página de login
})->name('logout');