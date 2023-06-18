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
                        <a class="btn btn-primary mb-1" href="{{ route('administradores.prestador', $prestador->id) }}"><i class="bi bi-eye"></i></a>
                        <a class="btn btn-primary mb-1" href="{{ route('prestadores.editar', $prestador->id) }}"><i class="bi bi-pencil-fill"></i></a>
                        <form action="{{ route('prestadores.destroy', $prestador->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('administradores.index') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>


@endsection
