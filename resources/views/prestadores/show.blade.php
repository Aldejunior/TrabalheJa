@extends('layout.pres')

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

    {{-- <div class="border rounder p-3 mb-3">
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
    </div> --}}
    @foreach ($prestador->servicos as $servico)
    <div class="card mb-3 ">
        <h5 class="card-header bg-primary text-light">{{ $servico->titulo }}</h5>
        <div class="card-body">
            <h5 class="card-title">

                <li>Cidade:{{$servico->pivot->cidade}}</li>
                <li>CEP:{{ $servico->pivot->cep }}</li>
                <li>Estado:{{ $servico->pivot->estado }}</li>
                <li>Valor: R$ {{ number_format($servico->pivot->valor, '2', ',', '.') }}</li>
            </h5>
          <p class="card-text">{{$servico->descricao}}</p>
        </div>
      </div>
    @endforeach

    <a href="{{ route('prestadores.editar', $prestador->id) }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Editar</button></a>
    <a href="{{ route('prestadores.home') }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Voltar</button></a>
@endsection
