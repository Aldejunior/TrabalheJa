@extends('layout.site')

@section('conteudo')
    <form action="{{route('site.login.store')}}" method="post" class="mb-3">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Login do Prestador</h1>

        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="floatingInput" placeholder="">
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

        <div class="form-floating mb-3">
            <select class="form-select" name="guarda" id="">
                <option value="pre">Prestador</option>
                <option value="adm">Administrador</option>
            </select>
            <label for="floatingInput">Tipo:</label>
        </div>

        <button class="w-100 btn btn-lg btn-success mb-3" type="submit">Entrar</button>

    </form>

    <a href="{{route('site.home')}}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
