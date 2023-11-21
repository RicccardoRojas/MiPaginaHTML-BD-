
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<h1 class="text-center"> Editar Vehiculos</h1>

    <div class="container">
        <form action="{{ route('VehiculosUpdate', $vehiculos->id) }}" method="POST" enctype="multipart/form-data">
            {{-- Clave Encriptacion --}}
            @csrf @method('PATCH')

            <div class="form-group">
                <label for="nombre" class="form-label">Nombre: </label>
                <input  type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre',$vehiculos->nombre)}}">

                @error('nombre')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="modelo" class="form-label">Modelo:</label>
                <input type="text" name="modelo" id="modelo" class="form-control" value="{{old('modelo',$vehiculos->modelo)}}">

                @error('modelo')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="etiqueta" class="form-label">Etiqueta: </label>
                <input type="text" name="etiqueta" id="etiqueta" class="form-control" value="{{old('etiqueta',$vehiculos->etiqueta)}}">

                @error('etiqueta')
                    <div style="color: red">{{$message}}</div>
                @enderror
            </div>


            <div class="form-group">
                <label for="imagen" class="form-label">Imagen Actual: </label>
                <input type="text" name="imagen" id="imagen" class="form-control" value="{{ old('imagen', $vehiculos->imagen) }}" readonly>
        
                @error('imagen')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>
        
            <!-- Campo para cargar una nueva imagen -->
            <div class="form-group">
                <label for="nueva_imagen" class="form-label">Seleccionar Nueva Imagen: </label>
                <input type="file" name="nueva_imagen" id="nueva_imagen" class="form-control">
        
                @error('nueva_imagen')
                    <div style="color: red">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./js/snippets.js"></script>
