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
        @foreach ($servicos as $servico)
            <tr>
                <td>{{ $servico->nome }}</td>
                <td>{{ $servico->email }}</td>

                <td>
                    <a class="btn btn-primary" href="{{ route('servicos.editar', $servico->id) }}">Editar</a>
                    <form action="{{ route('servicos.destroy', $servico->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>
        <a href="{{ route('servicos.show') }}"><button class="w-100 btn btn-lg btn-success mb-3" type="button">Vizualizar Serviços</button></a>

        <a href="{{ route('servicos.create') }}"><button class="w-100 btn btn-lg btn-success" type="button">Cadastrar Cadastrar Serviço</button></a>

@endsection
