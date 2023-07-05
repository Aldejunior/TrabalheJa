@extends('layout.site')

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
    <a href="https://wa.me/+55{{ $prestador->telefone }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button"><i class="bi bi-whatsapp"></i> Contato</button></a>
    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button"><i class="bi bi-arrow-90deg-left"></i>Voltar</button></a>
@endsection
