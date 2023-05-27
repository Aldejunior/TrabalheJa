@extends('layout.admin')

@section('conteudo')
<table class="table table-striped">
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
                    <a class="btn btn-primary" href="{{ route('administradores.editar', $administrador->id) }}">Editar</a>
                    <form action="{{ route('administradores.destroy', $administrador->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>

@endsection
