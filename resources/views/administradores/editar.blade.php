@extends('layout.admin')

@section('conteudo')
    <form action="{{ route('administradores.update', $administrador->id) }}" method="post" class="mb-3">
        @csrf
        @method('put')

        <h1 class="h3 mb-3 fw-normal">Atualização do administrador</h1>

        <div class="form-floating mb-3">
            <input type="text" name="nome" value="{{ $administrador->nome }}" class="form-control" placeholder="">
            <label>Nome:</label>
        </div>

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ $administrador->email }}" class="form-control" placeholder="">
            <label>E-mail:</label>
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="w-100 btn btn-lg btn-success" type="submit">Atualizar</button>
    </form>

    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
