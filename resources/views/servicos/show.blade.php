@extends('layout.admin')

@section('conteudo')

    <div class="shadow p-3 mb-5 bg-body-tertiary rounded position-relative container-fluid">
        <img class="img-fluid" src="/storage/{{ $servico->imagem }}" width="100%" height="300" alt="Imagem">
        <div class="position-absolute bottom-0 start-50 translate-middle-x">
            <h1 class="text-light display-1">{{ $servico->titulo }}</h1>
        </div>
    </div>
    <h3 class="text-center card mb-4">{{ $servico->descricao }}</h3>

    <a href="{{ route('servicos.editar', $servico->id) }}"><button class="w-100 btn btn-lg btn-primary mb-3" type="button">Editar</button></a>
    <form action="{{ route('servicos.destroy', $servico->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="w-100 btn btn-lg btn-danger mb-3" type="submit">Deletar</button>
    </form>

    <h1>Prestadores Cadastrados</h1>

    @foreach ($servico->prestadores as $prestador)
    <div class="card mb-3">
        <h5 class="card-header">{{ $prestador->nome }}</h5>
        <div class="card-body">
          <h5 class="card-title">
            Cidade:{{ $prestador->pivot->cidade }}<br>
            Valor: R$ {{ number_format($prestador->pivot->valor, '2', ',', '.') }}
        </h5>
          <p class="card-text">{{$servico->descricao}}</p>
          <a href="{{route('site.prestador', $prestador->id)}}" class="btn btn-primary">Ver</a>
        </div>
      </div>
    @endforeach

    <a href="{{ route('servicos.index') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
