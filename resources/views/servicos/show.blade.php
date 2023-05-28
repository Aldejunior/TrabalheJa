@extends('layout.admin')

@section('conteudo')

    <h1>{{ $servico->titulo }}</h1>
    <p>{{ $servico->descricao }}</p>
    <p>{{ $servico->foto}}</p>

    <a href="{{ route('servicos.editar', $servico->id) }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Editar</button></a>
    <a href="{{ route('servicos.index', $servico->id) }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
