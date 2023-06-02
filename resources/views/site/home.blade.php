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
                            <li><a href="{{ route('site.login') }}" class="text-white">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="{{ route( 'site.home' ) }}" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        aria-hidden="true" class="me-2" ContatoBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>Trabalhe já</strong>

                    <nav class="navbar">
                        <div class="container-fluid">
                            <a class="navbar-brand"></a>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="🔍" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                            </form>
                        </div>
                    </nav>

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
                    <p>
                        <a href="{{route('servicos.index')}}" class="btn btn-primary my-2">Serviços</a>
                        <a href="#" class="btn btn-secondary my-2">Amo o victor</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">

            <div class="container mb-3">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($servicos as $servico )
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ asset('imagens/mecanico.jpeg') }}"width="100%" height="225">
                            <div class="card-body">
                                        <p class="card-text">
                                            {{$servico->titulo}}
                                            {{$servico->descricao}}
                                        </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Contato</button>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
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
