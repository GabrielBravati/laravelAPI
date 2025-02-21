@extends('layouts.app')

@section('title', 'Faixas')

@section('content')
    <h1>Lista de Faixas</h1>
    <a href="{{ route('faixas.create') }}" class="btn btn-primary">Adicionar Faixa</a>
    <ul class="list-group mt-3">
        @forelse ($faixas as $faixa)
            <li class="list-group-item">
                {{ $faixa->ordem }}. {{ $faixa->nome }} - {{ gmdate("i:s", $faixa->duracao) }}
            </li>
        @empty
            <li class="list-group-item">Nenhuma faixa encontrada.</li>
        @endforelse
    </ul>
@endsection