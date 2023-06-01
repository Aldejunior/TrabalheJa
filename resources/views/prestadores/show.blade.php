@extends('layout.admin')

@section('conteudo')

    <h1>{{ $prestador->nome }}</h1>
<div class="container mb-3">
    <div class="card mb-1">
        <div class="card-body">
            <p>E-mail: {{ $prestador->email }}</p>
        </div>
    </div>
    <div class="card mb-1">
        <div class="card-body">
            <p>Cpf/Cnpj: {{ $prestador->cpf_cnpj }}</p>
        </div>
    </div>
    <div class="card mb-1">
        <div class="card-body">
            <p>Contato: {{ $prestador->telefone }}</p>
        </div>
    </div>
</div>



    <form action="{{ route('prestadores.store') }}" method="post" class="containner mb-3">
        @csrf

        <h1 class="h3 mb-3 fw-normal">Cadastrar-se em Servico</h1>


        <select class="form-select" aria-label="Default select example">
            <option selected>Escolha ô Serviço</option>
            <option>One</option>
            <option>Two</option>
            <option>Three</option>
          </select>

        <div class="form-floating mb-3">
            <input type="text" name="servico_id" value="{{ old('servico_id') }}" class="form-control" >
            <label>servico_id:</label>
        </div>

        @error('servico_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="text" name="Valor" value="{{ old('valor') }}" class="form-control" >
            <label>Valor:</label>
        </div>

        @error('valor')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="row">

            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" name="estado" class="form-control" >
                    <label>Estado:</label>
                </div>

                @error('estado')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-floating mb-3">
                    <input type="text" name="cep" value="{{ old('cep') }}" class="form-control" >
                    <label>CEP:</label>
                </div>

                @error('cep')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror



            </div>
        </div>

            <div class="col-6">
                <div class="form-floating mb-3">
                    <input type="text" name="cidade" class="form-control" >
                    <label>Cidade:</label>
                </div>

                @error('cidade')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        <button class="w-100 btn btn-lg btn-success" type="submit">Cadastrar</button>
    </form>


    <a href="{{ route('prestadores.editar', $prestador->id) }}"><button class="w-100 btn btn-lg btn-primary mb-3" type="button">Editar</button></a>



@endsection
