<!-- resources/views/dashboard.blade.php -->

@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 bg-dark text-white p-3">
                <h4 class="text-center">Menu</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('home') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('albuns.index') }}">Álbuns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('faixas.index') }}">Faixas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('usuarios.index') }}">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('logout') }}">Sair</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Bem-vindo ao Dashboard</h2>
                    <button class="btn btn-primary">Nova Ação</button>
                </div>
                <p>Este é o painel de controle da sua aplicação. Você pode gerenciar álbuns, faixas e usuários através do
                    menu lateral.</p>

                <!-- Exemplos de Cards para visualização de dados -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Total de Álbuns
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">10</h5>
                                <p class="card-text">Número total de álbuns cadastrados.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-success text-white">
                                Total de Faixas
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">25</h5>
                                <p class="card-text">Número total de faixas cadastradas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-warning text-white">
                                Total de Usuários
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">5</h5>
                                <p class="card-text">Número total de usuários cadastrados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection