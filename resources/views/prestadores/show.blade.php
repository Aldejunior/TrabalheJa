@extends('layout.admin')

@section('conteudo')
    <h1>{{ $prestador->nome }}</h1>
    <p>{{ $prestador->email }}</p>
    <p>{{ $prestador->cpf_cnpj }}</p>
    <p>{{ $prestador->telefone }}</p>

    <a href="{{ route('prestadores.editar', $prestador->id) }}"><button class="w-100 btn btn-lg btn-warning" type="button">Editar</button></a>
@endsection
