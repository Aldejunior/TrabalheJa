<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Trabalhe já </title>
</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">

            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">

                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Menu</h4>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('prestadores.create') }}" class="text-white">Cadastre-se</a></li>
                            <li><a href="{{ route('site.servicos') }}" class="text-white">Serviços</a></li>
                            <li><a href="{{ route('login') }}" class="text-white">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="{{ route( 'site.home' ) }}" class="navbar-brand d-flex align-items-center">
                    <strong>Trabalhe já</strong>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                    aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>

    </header>
    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light"><b>Trabalhe Já</b></h1>
                    <p class="lead text-muted"><b>O Trabalhe Já tem como objetivo facilitar a rotina dos usuários
                            conectando vários individuos, tais como empresas, empreendedores independentes e
                            clientes.</b></p>
                    <div class="container">
                        <a href="{{route('site.servicos')}}" class="btn btn-primary my-2">Serviços</a>
                        @foreach ($servicos as $servico )

                            <a href="{{route('site.servico', $servico->id)}}" class="btn btn-secondary my-2">{{$servico->titulo}}</a>

                        @endforeach

                    </div>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">

            <div class="container mb-3">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($servicos as $servico)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="/storage/{{ $servico->imagem }}"  width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text">
                                        <h2>{{ $servico->titulo}}</h2>
                                        {{ $servico->descricao }}
                                    </p>

                                        <div class="btn-group d-flex justify-content-between align-items-center">
                                            <a href="{{ route('site.servico', $servico->id) }}"><button type="button" class="btn btn-sm btn-outline-secondary">Prestadores</button></a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
            <p class="mb-1">TrabalheJá &copy;</p>
            <p class="mb-0">Desenvolvido por: Victor e Aldejunior</p>
            <p class="mb-0">Entre em contado conosco: Trabalheja@outlook.com</p>
        </div>
    </footer>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
