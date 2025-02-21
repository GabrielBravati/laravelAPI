@extends('layouts.app')

@section('title', 'Álbuns')

@section('content')
    <h1>Lista de Álbuns</h1>
    <a href="{{ route('albuns.create') }}" class="btn btn-primary">Adicionar Álbum</a>
    <ul class="list-group mt-3">
        @forelse ($albuns as $album)
            <li class="list-group-item">
                {{ $album->nome }} ({{ $album->ano_lancamento }}) - {{ $album->artista }}
            </li>
        @empty
            <li class="list-group-item">Nenhum álbum encontrado.</li>
        @endforelse
    </ul>
@endsection