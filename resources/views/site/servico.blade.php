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
                <td>Escolha</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($servico->prestadores as $prestador)
                <tr>
                    <td>{{ $prestador->nome }}</td>
                    <td>{{ $prestador->pivot->valor }}</td>
                    <td>{{ $prestador->pivot->cidade }}</td>
                    <td><a class="btn btn-primary mb-1" href="{{route('site.prestador', $prestador->id)}}">ver</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
