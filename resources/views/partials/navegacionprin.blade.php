<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top navbar-cel" id="BackgroundNav">
    <div class="container-fluid navbar-cel">
      <a class="navbar-brand" href="{{route('MuroIndex')}}">
        <img class="logo" src="{{ asset('img/Porsche.png') }}">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item Menu">
            <a class="nav-link active" aria-current="page" href="{{route('MuseoIndex')}}">MUSEO</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item Menu">
            <a class="nav-link active" aria-current="page" href="{{route('StoreIndex')}}">STORE</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item Menu">
            <a class="nav-link active" aria-current="page" href="#contacto">CONTACTO</a>
          </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item Menu">
                <span class="nav-link active text-primary">Usuario: {{auth()->user()->username}}</span>
            </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item Menu">
                <form action="{{route('LogoutStore')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-outline-info">Cerrar Sesion</button>
              </form>
        </li>
        </ul>

      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./js/snippets.js"></script>