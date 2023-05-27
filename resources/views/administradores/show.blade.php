@extends('layout.admin')

@section('conteudo')
    <h1>{{ $administrador->nome }}</h1>
    <p>{{ $administrador->email }}</p>
    <p>{{ $administrador->cpf_cnpj }}</p>
    <p>{{ $administrador->telefone }}</p>

    <a href="{{ route('administradores.editar', $administrador->id) }}">
    <button class="w-100 btn btn-lg btn-warning" type="button">Editar</button></a>
@endsection
