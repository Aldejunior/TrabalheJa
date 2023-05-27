@extends('layout.admin')

@section('conteudo')
    <h1>{{ $administrador->nome }}</h1>
    <p>{{ $administrador->email }}</p>
    <p>{{ $administrador->cpf_cnpj }}</p>
    <p>{{ $administrador->telefone }}</p>

    <a href="{{ route('administradores.editar', $administrador->id) }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Editar</button></a>
    <a href="{{ route('administradores.index', $administrador->id) }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
