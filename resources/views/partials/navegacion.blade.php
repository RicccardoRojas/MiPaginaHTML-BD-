<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top navbar-cel" id="BackgroundNav">
    <div class="container-fluid navbar-cel">
      <a class="navbar-brand" href="index.html">
        <img class="logo" src="{{ asset('img/Porsche.png') }}">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item Menu">
              {{-- <a class="nav-link active btn btn-outline-info" aria-current="page" href="#contacto">LOGIN</a> --}}
              <button type="button" class="btn btn-outline-info" onclick="location.href='{{route('LoginIndex')}}'">LOGIN</button>
            </li>
          </ul>

          <ul class="navbar-nav ms-2">
            <li class="nav-item Menu">
              {{-- <a class="nav-link active btn btn-secondary text-white" aria-current="page" href="#contacto">SIGN UP</a> --}}
              <button type="button" class="btn btn-outline-secondary" onclick="location.href='{{route('RegistroIndex')}}'">SIGN UP</button>
            </li>
          </ul>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./js/snippets.js"></script>