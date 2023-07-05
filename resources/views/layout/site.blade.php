<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Trabalhe já </title>
    </head>

    <body>
            <nav class="navbar navbar-dark bg-dark ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{route('site.home')}}">Trabalhe Já</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="{{route('site.home')}}"><i class="bi bi-house"></i> Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('site.servicos')}}"><i class="bi bi-wrench-adjustable"></i> Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}"><i class="bi bi-door-open"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('prestadores.create')}}"><i class="bi bi-pencil-square"></i> Cadastre-se</a>
                          </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </nav>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/di  st/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
            <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
        <main class="container">
            @yield('conteudo')

        </main>
        <footer class="text-muted py-5">
            <div class="container">
                <p class="float-end mb-1">
                <p class="mb-1">TrabalheJá &copy;</p>
                <p class="mb-0">Desenvolvido por: Victor e Aldejunior</p>
                <p class="mb-0">Entre em contado conosco: Trabalheja@outlook.com</p>
            </div>
        </footer>
    </body>
</html>
