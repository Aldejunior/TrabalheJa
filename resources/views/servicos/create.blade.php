@extends('layout.admin')

@section('conteudo')
    <form action="{{ route('servicos.store') }}" method="post" class="mb-3" enctype="multipart/form-data">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Cadastro de Servico</h1>

        <div class="form-floating mb-3">
            <input type="text" name="titulo" value="{{ old('titulo') }}" class="form-control" >
            <label>Titulo:</label>
        </div>

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" name="descricao" value="{{ old('descricao') }}" class="form-control" >
            <label>Descrição:</label>
        </div>

        @error('descricao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="mb-3">
            <label>Imagem:</label>
            <input type="file" name="imagem" class="form-control">
        </div>

        @error('imagem')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="col-12">
        <button class="w-100 btn btn-lg btn-success" type="submit">Cadastrar</button><br /><br />
    </div>
  </form>

    <a href="{{ route('administradores.index') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
