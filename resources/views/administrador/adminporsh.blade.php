<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


<h2 class="text-center">Porsche Principal "Muro" </h2>

    <div class="container mt-3">

        <table class="table table-responsive table-striped">
            <tr class="table-primary">
                <td>ID</td>
                <td>Nombre</td>
                <td>Modelo</td>
                <td>Etiqueta</td>
                <td>Imagen</td>
                <td class="text-center">Acciones</td>
            </tr>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{$vehiculo->id}}</td>
                    <td>{{$vehiculo->nombre}}</td>
                    <td>{{$vehiculo->modelo}}</td>
                    <td>{{$vehiculo->etiqueta}}</td>
                    <td>{{$vehiculo->imagen}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('VehiculosEdit', $vehiculo->id) }}" class="btn btn-success mx-1">Editar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{-- Crear Paginacion por secciones usando boostrap --}}
        {{-- {{$productos->links('pagination::bootstrap-5')}} --}}
    </div>

    {{-- href="{{route('',
    $vehiculo->id)}}" --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./js/snippets.js"></script>