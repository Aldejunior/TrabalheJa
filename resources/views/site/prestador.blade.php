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
                        <li>Valor: {{ $servico->pivot->valor }}</li>
                        <li>Cidade: {{ $servico->pivot->cidade }}</li>
                        <li>CEP: {{ $servico->pivot->cep }}</li>
                        <li>Estado: {{ $servico->pivot->estado }}</li>
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <a href="https://wa.me/+55{{ $prestador->telefone }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Contato</button></a>
    <a href="{{ route('site.servico', $servico->id) }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Voltar</button></a>
@endsection
