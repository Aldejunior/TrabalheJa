@extends('layout.pres')

@section('conteudo')

        <h1 class="text-center">Servicos</h1>
        @foreach ($servicos as $servico)
            <div class="card mb-3" style="max-width:100%;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="/storage/{{ $servico->imagem }}" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{ $servico->titulo }}</h5>
                      <p class="card-text">{{ $servico->descricao}}</p>
                      <p class="card-text"><small class="text-body-secondary"><a class="btn btn-primary mb-1" href="{{ route('prestadores.servico', $servico->id) }}">Ver</a></small></p>
                    </div>
                  </div>
                </div>
              </div>

        @endforeach
        <a href="{{ route('prestadores.home') }}"><button class="w-100 btn btn-lg btn-warning mb-3" type="button">Voltar</button></a>
@endsection
