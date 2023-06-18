<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>Admin | Trabalhe Já</title>
    </head>

    <body>
        <nav class="navbar bg-body-tertiary ">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('administradores.index')}}">Admin | Trabalhe Já</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('administradores.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('servicos.index')}}">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('prestadores.index')}}">Prestadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('site.login.logout')}}">Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>

        {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('administradores.index')}}">Home</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('servicos.index') }}">Serviços</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('prestadores.create') }}">Prestadores</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/di  st/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <main class="container">
            @yield('conteudo')
        </main>

    </body>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
            <p class="mb-1">TrabalheJá &copy;</p>
            <p class="mb-0">Desenvolvido por: Victor e Aldejunior</p>
            <p class="mb-0">Entre em contado conosco: Trabalheja@outlook.com</p>
        </div>
    </footer>
</html>
