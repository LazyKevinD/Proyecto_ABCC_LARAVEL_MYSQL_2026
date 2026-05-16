<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Servicios Escolares</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <div class="container">

            <a class="navbar-brand" href="/">
                Servicios Escolares
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Asignaturas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Docentes
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <!-- CONTENIDO -->
    <div class="container mt-5">

        <h1 class="text-center mb-4">
            SERVICIOS ESCOLARES
        </h1>

        <!-- MENSAJE -->
        @if(Session::has('message'))

            <div class="alert alert-success">

                {{ Session::get('message') }}

            </div>

        @endif

        <!-- BOTON AGREGAR -->
        <a href="{{ route('alumnos.create') }}"
           class="btn btn-success mb-4">

            AGREGAR

        </a>

        <!-- TABLA -->
        <div class="table-responsive">

            <table class="table table-striped table-bordered text-center">

                <thead class="table-dark">

                    <tr>
                        <th>Numero de Control</th>
                        <th>Nombre</th>
                        <th>Semestre</th>
                        <th>Fecha Nacimiento</th>
                        <th>Acciones</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach($alumnos as $a)

                        <tr>

                            <td>{{ $a->Num_Control }}</td>

                            <td>{{ $a->Nombre }}</td>

                            <td>{{ $a->Semestre }}</td>

                            <td>{{ $a->Fecha_Nac }}</td>

                            <td>

                                <!-- DETALLE -->
                                <a class="btn btn-primary btn-sm"
                                   href="{{ route('alumnos.show', $a->id) }}">

                                    Detalle

                                </a>

                                <!-- EDITAR -->
                                <a class="btn btn-warning btn-sm"
                                   href="{{ route('alumnos.edit', $a->id) }}">

                                    Editar

                                </a>

                                <!-- ELIMINAR -->
                                <form action="{{ route('alumnos.destroy', $a->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('¿Seguro que deseas eliminar?')">

                                        Eliminar

                                    </button>

                                </form>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

        <!-- PAGINACION -->
        {{ $alumnos->links() }}

    </div>

    <!-- FOOTER -->
    <footer class="text-center mt-5 mb-3">

        FOOTER

    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>