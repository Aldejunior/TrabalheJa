@extends('layout.site')

@section('conteudo')
    <form action="{{ route('administradores.store') }}" method="post" class="mb-3">

        @csrf
        <h1 class="h3 mb-3 fw-normal">Cadastro do Administrador</h1>

        <div class="form-floating mb-3">
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" placeholder="">
            <label>Nome:</label>
        </div>

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="">
            <label>E-mail:</label>
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="password" name="senha" class="form-control" placeholder="">
                    <label>Senha:</label>
                </div>

                @error('senha')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="password" name="senha_confirmation" class="form-control" placeholder="">
                    <label>Confirmar senha:</label>
                </div>

                @error('senha_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Cadastrar</button>
    </form>

    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
