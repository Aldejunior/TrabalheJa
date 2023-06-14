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
                    <div class="container-fluid">
                    <a class="btn btn-primary mb-1" href="{{ route('servicos.show', $servico->id) }}"><i class="bi bi-eye"></i></a>
                    <a class="btn btn-primary mb-1" href="{{ route('servicos.editar', $servico->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form action="{{ route('servicos.destroy', $servico->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
