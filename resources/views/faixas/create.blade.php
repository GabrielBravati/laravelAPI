@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criar Faixa</h2>
        <form action="{{ route('faixas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome da Faixa:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="duration">Duração:</label>
                <input type="text" class="form-control" id="duration" name="duration" required>
            </div>
            <div class="form-group">
                <label for="album_id">Álbum:</label>
                <select class="form-control" id="album_id" name="album_id" required>
                    <!-- Supondo que você tenha uma variável $albuns com os álbuns -->
                    @foreach($albuns as $album)
                        <option value="{{ $album->id }}">{{ $album->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="track_order">Ordem da Faixa:</label>
                <input type="number" class="form-control" id="track_order" name="track_order" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
@endsection