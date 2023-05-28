@extends('layout.admin')

@section('conteudo')
    <form action="{{ route('servicos.store') }}" method="post" class="mb-3">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Cadastro de Servico</h1>

        <div class="form-floating mb-3">
            <input type="text" name="titulo" value="{{ old('titulo') }}" class="form-control" >
            <label>Titulo:</label>
        </div>

        @error('titulo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">CEP</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Salvar cadastro
        </label>
      </div>
    </div>
    <div class="col-12">
        <button class="w-100 btn btn-lg btn-success" type="submit">Entrar</button><br /><br />
        <button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
    </div>
  </form>

    <a href="{{ route('administradores.index') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
