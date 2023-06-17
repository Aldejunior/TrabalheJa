@extends('layout.site')

@section('conteudo')
<div class="carousel-item active" data-bs-interval="10000">
    <img src="/storage/{{ $servico->imagem }}" width="100%" alt="">
    <div class="carousel-caption d-none d-md-block">
      <h5>First slide label</h5>
      <p>Some representative placeholder content for the first slide.</p>
    </div>

    <h1>{{ $servico->titulo }}</h1>
    <p>{{ $servico->descricao }}</p>



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

    <a href="{{ route('site.home') }}"><button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
@endsection
