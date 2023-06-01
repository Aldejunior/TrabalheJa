@extends('layout.admin')

@section('conteudo')

    <h1>{{ $servico->titulo }}</h1>
    <p>{{ $servico->descricao }}</p>

    <a href="{{ route('servicos.editar', $servico->id) }}"><button class="w-100 btn btn-lg btn-primary mb-3" type="button">Editar</button></a>
    <form action="{{ route('servicos.destroy', $servico->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="w-100 btn btn-lg btn-danger mb-3" type="submit">Deletar</button>
    </form>
    <a href="{{ route('servicos.index') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
