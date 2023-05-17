<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>


    <link href="sign-in.css" rel="stylesheet">

</head>
<body>
    <h1 class="text-center">Cadastro de Serviços</h1>
    <br>
    <form class="row g-3">
    <div class="col-md-6">
      <label for="inputEmail4" class="form-label">Serviço</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Prestador</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-12">
      <label for="inputAddress" class="form-label">Descrição</label>
      <input type="text" class="form-control" id="inputAddress" >
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Valor</label>
      <input type="text" class="form-control" id="inputAddress2" >
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">Estado</label>
      <select id="inputState" class="form-select">
        <option selected>...</option>
        <option>São Paulo</option>
        <option>Rio de Janeiro</option>
     <option>Mato Grosso do sul</option>

      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">CEP</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Salvar cadastro
        </label>
      </div>
    </div>
    <div class="col-12">
        <button class="w-100 btn btn-lg btn-success" type="submit">Entrar</button><br /><br />
        <button class="w-100 btn btn-lg btn-warning" type="button">Voltar</button></a>
    </div>
  </form>

</body>
</html>
