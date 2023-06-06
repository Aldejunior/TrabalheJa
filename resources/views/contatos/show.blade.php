@extends('layout.admin')

@section('conteudo')

<h1 class="h3 mb-3 fw-normal">Perfil do Prestador</h1>

    <h1>{{ $prestador->nome }}</h1>
    <p>{{ $prestador->email }}</p>
    <p>{{ $prestador->cpf_cnpj }}</p>
    <p>{{ $prestador->telefone }}</p>

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

    <a href="{{ route('contatos.index', $servico->id) }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>

@endsection
