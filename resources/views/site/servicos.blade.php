@extends('layout.admin')

@section('conteudo')
<table class="table table-striped">
    <thead>
        <tr>
            <td>Titulo</td>
            <td>Descrição</td>
            <td>Funções</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicos as $servico)
            <tr>
                <td>{{ $servico->titulo }}</td>
                <td>{{ $servico->descricao}}</td>
                <td>
                    <a class="btn btn-primary mb-1" href="{{ route('site.servico', $servico->id) }}">Ver</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
