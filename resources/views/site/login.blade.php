@extends('layout.admin')

@section('conteudo')
    <form action="prestadores.store" method="post" class="mb-3"> <!-- deve enviar os dados do form para uma pagina, que salve os dados no banco, assim que salvar deve ser redirecionado para o homePrestador -->
        @csrf
        <h1 class="h3 mb-3 fw-normal">Login do Prestador</h1>

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="floatingInput" placeholder="nome@examplo.com">
            <label for="floatingInput">E-mail:</label>
        </div>
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-floating mb-3">
            <input type="password" name="senha" class="form-control" id="floatingInput" >
            <label for="floatingInput">Senha:</label>
        </div>
        @error('senha')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button class="w-100 btn btn-lg btn-success mb-3" type="submit">Entrar</button>

    </form>

    <a href="{{route('site.home')}}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
