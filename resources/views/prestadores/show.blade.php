@extends('layout.admin')

@section('conteudo')
    <h1>{{ $prestador->nome }}</h1>
<div class="container mb-3">
    <div class="card mb-1">
        <div class="card-body">
            <p>E-mail: {{ $prestador->email }}</p>
        </div>
    </div>
    <div class="card mb-1">
        <div class="card-body">
            <p>Cpf/Cnpj: {{ $prestador->cpf_cnpj }}</p>
        </div>
    </div>
    <div class="card mb-1">
        <div class="card-body">
            <p>Contato: {{ $prestador->telefone }}</p>
        </div>
    </div>
</div>

    <a href="{{ route('prestadores.editar', $prestador->id) }}"><button class="w-100 btn btn-lg btn-primary mb-3" type="button">Editar</button></a>

@endsection
