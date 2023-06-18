<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pres | Trabalhe já </title>
    </head>

    <body>
            <nav class="navbar navbar-dark bg-dark ">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{route('prestadores.home')}}">Trabalhe Já</a>
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
                          <a class="nav-link active" aria-current="page" href="{{route('prestadores.home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{route('prestadores.servicos')}}">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('prestadores.show', $prestador->id)}}">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('prestadores.registro', $prestador->id)}}">Registro</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('site.login.logout')}}">Logout</a>
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
            <footer class="text-muted py-5">
                <div class="container">
                    <p class="float-end mb-1">
                    <p class="mb-1">TrabalheJá &copy;</p>
                    <p class="mb-0">Desenvolvido por: Victor e Aldejunior</p>
                    <p class="mb-0">Entre em contado conosco: Trabalheja@outlook.com</p>
                </div>
            </footer>
        </main>
    </body>
</html>
