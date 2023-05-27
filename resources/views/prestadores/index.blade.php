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
            @foreach ($prestadores as $prestador)
                <tr>
                    <td>{{ $prestador->nome }}</td>
                    <td>{{ $prestador->email }}</td>

                    <td>
                        <a class="btn btn-primary" href="{{ route('prestadores.editar', $prestador->id) }}">Editar</a>
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

@endsection
