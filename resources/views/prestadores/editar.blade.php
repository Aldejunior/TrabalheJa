@extends('layout.admin')

@section('conteudo')
    <form action="{{ route('prestadores.update', $prestador->id) }}" method="post" class="mb-3">
        @csrf
        @method('put')

        <h1 class="h3 mb-3 fw-normal">Atualização do Prestador</h1>

        <div class="form-floating mb-3">
            <input type="text" name="nome" value="{{ $prestador->nome }}" class="form-control" placeholder="">
            <label>Nome:</label>
        </div>

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="email" name="email" value="{{ $prestador->email }}" class="form-control" placeholder="">
            <label>E-mail:</label>
        </div>

        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" name="cpf_cnpj" value="{{ $prestador->cpf_cnpj }}" class="form-control" placeholder="">
            <label>CPF/CNPJ:</label>
        </div>

        @error('cpf_cnpj')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" name="telefone" value="{{ $prestador->telefone }}" class="form-control" placeholder="">
            <label>Telefone celular:</label>
        </div>

        @error('telefone')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="w-100 btn btn-lg btn-success" type="submit">Atualizar</button>
    </form>

    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
