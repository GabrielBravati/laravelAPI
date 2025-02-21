@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criar Álbum</h2>
        <form action="{{ route('albuns.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome do Álbum:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="release_year">Ano de Lançamento:</label>
                <input type="number" class="form-control" id="release_year" name="release_year" required>
            </div>
            <div class="form-group">
                <label for="artist">Artista:</label>
                <input type="text" class="form-control" id="artist" name="artist" required>
            </div>
            <div class="form-group">
                <label for="tracks">Faixas:</label>
                <input type="text" class="form-control" id="tracks" name="tracks" placeholder="Separa as faixas por vírgula"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
@endsection