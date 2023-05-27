@extends('layout.admin')

@section('conteudo')
    <form action="{{ route('prestadores.store') }}" method="post" class="mb-3">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Cadastro do Prestador</h1>

        <div class="form-floating mb-3">
            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" >
            <label>Nome:</label>
        </div>

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" >
            <label>E-mail:</label>
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="row">
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="password" name="senha" class="form-control" >
                    <label>Senha:</label>
                </div>

                @error('senha')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="password" name="senha_confirmation" class="form-control" >
                    <label>Confirmar senha:</label>
                </div>

                @error('senha_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="cpf_cnpj" value="{{ old('cpf_cnpj') }}" class="form-control" >
            <label>CPF/CNPJ:</label>
        </div>

        @error('cpf_cnpj')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" name="telefone" value="{{ old('telefone') }}" class="form-control" >
            <label>Telefone celular:</label>
        </div>

        @error('telefone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="w-100 btn btn-lg btn-success" type="submit">Cadastrar</button>
    </form>

    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
