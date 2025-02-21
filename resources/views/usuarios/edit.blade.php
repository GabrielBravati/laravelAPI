@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Usuário</h2>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" required>
            </div>

            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $usuario->username }}"
                    required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
@endsection