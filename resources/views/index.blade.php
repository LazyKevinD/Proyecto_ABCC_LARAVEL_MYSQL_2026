<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Listado de alumnos</h1>

    <a href="{{ route('alumnos.create') }}" class="btn btn-success">
        AGREGAR
    </a>

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nombre</th>
            </tr>
        </thead>

        <tbody>
            @foreach($alumnos as $a)
                <tr>
                    <td>{{ $a->Nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>