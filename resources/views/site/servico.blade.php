@extends('layout.admin')

@section('conteudo')

    <h1>{{ $servico->titulo }}</h1>
    <p>{{ $servico->descricao }}</p>

    <table class="table table-striped">
        <thead>
            <tr>
                <td>Prestador</td>
                <td>Valor</td>
                <td>Cidade</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($servico->prestador as $prestador)
                <tr>
                    <td>{{ $prestador->pivot->nome }}</td>
                    <td>{{ $prestador->pivot->valor}}</td>
                    <td>{{ $prestador->pivot->cidade}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('servicos.index') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
