@extends('layout.admin')

@section('conteudo')
    <form action="{{ route('servicos.update', $servico->id) }}" method="post" class="mb-3">
        @csrf
        @method('put')

        <h1 class="h3 mb-3 fw-normal">Atualização do servico</h1>

        <div class="form-floating mb-3">
            <input type="text" name="titulo" value="{{ $servico->titulo }}" class="form-control" placeholder="">
            <label>Título:</label>
        </div>

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" name="descricao" value="{{ $servico->descricao }}" class="form-control" placeholder="">
            <label>Descrição:</label>
        </div>

        @error('descricao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="w-100 btn btn-lg btn-success" type="submit">Atualizar</button>
    </form>

    <a href="{{ route('servicos.show') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
