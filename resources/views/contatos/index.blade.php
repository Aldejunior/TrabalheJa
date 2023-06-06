@extends('layout.admin')

@section('conteudo')
<table class="table table-bordered ">

    <h1 class="h3 mb-3 fw-normal">Lista de Prestadores {{$servico->titulo}}</h1>
    <p>{{$servico->descricao}}</p>


    <thead>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Valor</td>
            <td>Cidade</td>
            <td>Estado</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($prestador->servicos as $servico)
            <tr>
                <td>{{ $prestador->nome }}</td>
                <td>{{ $prestador->email }}</td>
                <td>{{$servico->pivot->valor}}</td>
                <td>{{$servico->pivot->cidade}}</td>
                <td>{{$servico->pivot->estado}}</td>
                <td>
                    <a class="btn btn-primary mb-1" href="{{route('contatos.show', $prestador->id)}}">Contato</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
        <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-primary" type="button">Voltar</button></a>
@endsection
