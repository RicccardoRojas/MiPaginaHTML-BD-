<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class="login-container card">
            <h3 class="text-center">Registrarse</h3>
          <div class="image-container">
            <img class="logolog" src="img/Porsche.png">
          </div>
          <div>
            <form action="{{route('RegistroStore')}}" method="POST">
                @csrf

                @if(session('mensaje'))
                <div style="color: red">{{session('mensaje')}}</div>
                @endif

                <div class="form-group">
                    <label for="name" class="form-label">Nombre: </label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Escribe Tu Nombre">
    
                    @error('name')
                        <div style="color: red">{{$message}}</div>
                    @enderror
                </div>

              <div class="form-group">
                <label for="username" class="form-label">Usuario:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su usuario"  value="{{old('username')}}">

                @error('username')
                    <div style="color: red">{{$message}}</div>
                @enderror

              </div>

              <div class="form-group mt-3">
                <label for="email" class="form-label">Correo Electronico:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Escribe Tu Correo">

                @error('email')
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

              <div class="form-group mt-3">
                <label for="password_confirmation" class="form-label">Repetir Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite Tu Contraseña">

                @error('password')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>
              <button type="submit" class="btn btn-primary btn-login">Registrarse</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="./js/snippets.js"></script>