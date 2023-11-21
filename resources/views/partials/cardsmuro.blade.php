<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- Cards -->
<h2 class="ms-5 mt-5 mb-4">
    <span>Conoce el Estilo</span>
  </h2>


  <!-- 1 Section -->
  <div class="custom-container container-fluid">
    <div class="card">
        <h2 class="card-title">{{ $vehiculos[0]['modelo']}} {{ $vehiculos[0]['nombre']}}</h2>
        <div class="card-image">
            <img src="{{ url('storage/' . $vehiculos[0]['imagen']) }}" alt="">
        </div>
        <div class="card-body">
            <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[0]['etiqueta']}}</span></h4>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a href="{{route('StoreIndex')}}">
                <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
              </a>
            </div>
        </div>
    </div>
    <div class="card">
      <h2 class="card-title">{{ $vehiculos[1]['modelo']}} {{ $vehiculos[1]['nombre']}}</h2>
      <div class="card-image">
        <img src="{{ url('storage/' . $vehiculos[1]['imagen']) }}" alt="">
      </div>
      <div class="card-body">
          <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[1]['etiqueta']}}</span></h4>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('StoreIndex')}}">
              <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
            </a>
          </div>
      </div>
    </div>
    <div class="card">
      <h2 class="card-title">{{ $vehiculos[2]['modelo']}} {{ $vehiculos[2]['nombre']}}</h2>
      <div class="card-image">
        <img src="{{ url('storage/' . $vehiculos[2]['imagen']) }}" alt="">
      </div>
      <div class="card-body">
          <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[2]['etiqueta']}}</span></h4>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('StoreIndex')}}">
              <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
            </a>
          </div>
      </div>
    </div>

    <div class="card tablet">
      <h2 class="card-title">{{ $vehiculos[3]['modelo']}} {{ $vehiculos[3]['nombre']}}</h2>
      <div class="card-image">
        <img src="{{ url('storage/' . $vehiculos[3]['imagen']) }}" alt="">
      </div>
      <div class="card-body">
          <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[3]['etiqueta']}}</span></h4>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('StoreIndex')}}">
              <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
            </a>
          </div>
      </div>
    </div>
  </div>

  <!--2 section-->
  <div class="custom-container container-fluid sec2">
    <div class="card">
      <h2 class="card-title">{{ $vehiculos[4]['modelo']}} {{ $vehiculos[4]['nombre']}}</h2>
      <div class="card-image">
        <img src="{{ url('storage/' . $vehiculos[4]['imagen']) }}" alt="">
      </div>
      <div class="card-body">
          <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[4]['etiqueta']}}</span></h4>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('StoreIndex')}}">
              <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
            </a>
          </div>
      </div>
    </div>
    <div class="card">
      <h2 class="card-title">{{ $vehiculos[5]['modelo']}} {{ $vehiculos[5]['nombre']}}</h2>
      <div class="card-image">
        <img src="{{ url('storage/' . $vehiculos[5]['imagen']) }}" alt="">
      </div>
      <div class="card-body">
          <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[5]['etiqueta']}}</span></h4>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('StoreIndex')}}">
              <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
            </a>
          </div>
      </div>
    </div>
    <div class="card">
      <h2 class="card-title">{{ $vehiculos[6]['modelo']}} {{ $vehiculos[6]['nombre']}}</h2>
      <div class="card-image">
        <img src="{{ url('storage/' . $vehiculos[6]['imagen']) }}" alt="">
      </div>
      <div class="card-body">
          <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[6]['etiqueta']}}</span></h4>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="{{route('StoreIndex')}}">
              <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
            </a>
          </div>
      </div>
    </div>

  <div class="card tablet">
    <h2 class="card-title">{{ $vehiculos[7]['modelo']}} {{ $vehiculos[7]['nombre']}}</h2>
    <div class="card-image">
      <img src="{{ url('storage/' . $vehiculos[7]['imagen']) }}" alt="">
    </div>
    <div class="card-body">
        <h4 class="mb-0"><span class="ms-3">{{ $vehiculos[7]['etiqueta']}}</span></h4>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="{{route('StoreIndex')}}">
            <button class="btn me-md-2 mt-0 botones" type="button">STORE</button>
          </a>
        </div>
    </div>
  </div>
  </div>

  <!-- Fin de las cards -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./js/snippets.js"></script>