@extends('layout.admin')

@section('conteudo')
<h1 class="text-center">Serviços</h1>
{{-- <table class="table table-striped">
    <thead>
        <tr>
            <td>Titulo</td>
            <td>Descrição</td>
            <td>Funções</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($servicos as $servico)
            <tr>
                <td>{{ $servico->titulo }}</td>
                <td>{{ $servico->descricao}}</td>
                <td>
                    <div class="container-fluid">
                    <a class="btn btn-primary mb-1" href="{{ route('servicos.show', $servico->id) }}"><i class="bi bi-eye"></i></a>
                    <a class="btn btn-primary mb-1" href="{{ route('servicos.editar', $servico->id) }}"><i class="bi bi-pencil-fill"></i></a>
                    <form action="{{ route('servicos.destroy', $servico->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"><i class="bi bi-trash3"></i></button>
                    </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}
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
            <p class="card-text"><small class="text-body-secondary"><a class="btn btn-primary mb-1" href="{{route('servicos.show', $servico->id)}}"><i class="bi bi-eye"></i></a></small></p>
            </div>
        </div>
        </div>
    </div>
    @endforeach

@endsection
