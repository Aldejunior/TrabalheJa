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

    <div class="border rounder p-3">
        <h1>Meus serviços</h1>

        <ul>
            @foreach ($prestador->servicos as $servico)
                <li>
                    {{ $servico->titulo }}
                    <ul>
                        <li>{{ $servico->pivot->valor }}</li>
                        <li>{{ $servico->pivot->cidade }}</li>
                        <li>{{ $servico->pivot->cep }}</li>
                        <li>{{ $servico->pivot->estado }}</li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <a href="{{ route('prestadores.editar', $prestador->id) }}"><button class="w-100 btn btn-lg btn-primary mb-3" type="button">Editar</button></a>
    <a href="{{ route('prestadores.home') }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Voltar</button></a>
@endsection
