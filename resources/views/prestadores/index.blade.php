@extends('layout.admin')

@section('conteudo')

    <h1 class="h3 mb-3 fw-normal">Lista de Prestadores</h1>


    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nome</td>
                <td>E-mail</td>
                <td>Funções</td>

            </tr>
        </thead>
        <tbody>
            @foreach ($prestadores as $prestador)
                <tr>
                    <td>{{ $prestador->nome }}</td>
                    <td>{{ $prestador->email }}</td>

                    <td>
                        <a class="btn btn-primary mb-1" href="{{ route('prestadores.show', $prestador->id) }}">Ver</a>
                        <a class="btn btn-primary mb-1" href="{{ route('prestadores.editar', $prestador->id) }}">Editar</a>
                        <form action="{{ route('prestadores.destroy', $prestador->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('prestadores.create') }}"><button class="w-100 btn btn-lg btn-success" type="button">Novo Prestador</button></a>


@endsection
