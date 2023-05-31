@extends('layout.admin')

@section('conteudo')
<table class="table table-bordered ">

    <h1 class="h3 mb-3 fw-normal">Lista de Administradores</h1>


    <thead>
        <tr>
            <td>Nome</td>
            <td>E-mail</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($administradores as $administrador)
            <tr>
                <td>{{ $administrador->nome }}</td>
                <td>{{ $administrador->email }}</td>

                <td>
                    <a class="btn btn-primary mb-1" href="{{ route('administradores.editar', $administrador->id) }}">Editar</a>
                    <form action="{{ route('administradores.destroy', $administrador->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
        <a href="{{ route('servicos.index') }}"><button class="w-100 btn btn-lg btn-primary mb-3" type="button">Vizualizar Serviços</button></a>

        <a href="{{ route('servicos.create') }}"><button class="w-100 btn btn-lg btn-primary" type="button">Cadastrar Serviço</button></a>

@endsection
