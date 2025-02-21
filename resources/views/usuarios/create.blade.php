@extends('layouts.app') <!-- Assume que você tem um layout básico -->

@section('content')
    <div class="container">
        <h2>Criar Usuário</h2>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="birth_date">Data de Nascimento:</label>
                <input type="date" class="form-control" id="birth_date" name="birth_date" required>
            </div>
            <div class="form-group">
                <label for="gender">Sexo:</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
@endsection