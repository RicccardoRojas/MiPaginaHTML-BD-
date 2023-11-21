<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class="login-container card">
            <h3 class="text-center">Iniciar Sesión</h3>
          <div class="image-container">
            <img class="logolog" src="img/Porsche.png">
          </div>
          <div>
            <form action="{{route('LoginStore')}}" method="POST">
                @csrf

                @if(session('mensaje'))
                <div style="color: red">{{session('mensaje')}}</div>
                @endif

              <div class="form-group">
                <label for="username" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario"  value="{{old('username')}}">

                @error('username')
                    <div style="color: red">{{$message}}</div>
                @enderror

              </div>
              <div class="form-group">
                <label for="password" class="form-label">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">

                @error('password')
                <div style="color: red">{{$message}}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary btn-login">Iniciar Sesión</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./js/snippets.js"></script>