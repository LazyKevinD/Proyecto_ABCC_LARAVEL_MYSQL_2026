<!DOCTYPE html>
<html>
<head>
    <title>Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  </head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/"> Servicios Escolares </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
          aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Asignaturas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Docentes</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-md-12">
        <h1 style="font-size: 28px; margin-top: 50px;" class=" text-center">SERVICIOS ESCOLARES </h1>
        <div class="col-md-10">
          <!-- NVEGACION -->
          
          <div class="row">
            <div class="col-md-12">
              <div class="content-box-large">
                <div class="panel-heading">
                  <div class="panel-title">
                    <h2>Listado de Alumnos</h2>
                  </div>
                </div>
                <div class="panel-body">
                    <!--@if(Session::has('message'))
                    <div class="alert alert-success" role="alert" id="msj">
                        {{ Session::get('message') }}
                    </div>
                    @endif-->
                      <a href="{{route('alumnos.create')}}"
                        class="btn btn-success mt-4 ml-3"> AGREGAR </a>
                      <section class="example mt-4">
                        <div class="table-responsive" id="tablaAlumnos">

                          <table class='table table-striped table-bordered table-hover text-center'>
                              <thead>
                                <tr>
                                  <th>Numero de Control</th>
                                  <th>Nombre</th> <th>Semestre</th> <th>Fecha Nacimiento</th>
                                  <th>ACCIONES</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($alumnos as $a)
                                  <tr>
                                    <td class="v-align-middle">{{$a->Num_Control}}</td>
                                    <td class="v-align-middle">{{$a->Nombre}}</td>
                                    <td class="v-align-middle">{{$a->Semestre}}</td>
                                    <td class="v-align-middle">{{$a->Fecha_Nac}}</td>
                                    <td class="v-align-middle">
                                        <form action="{{ route('alumnos.destroy', $a) }}" method="POST" class="form-horizontal" role="form" onsubmit="return confirmarEliminacion()">
                                          @csrf
                                          @method('DELETE')
                                          <a class="btn btn-primary" href="{{route('alumnos.show', $a->id)}}">Detalle</a>
                                          <a class="btn btn-warning" href="{{route('alumnos.edit', $a->id) }}">Editar</a>
                                        <button type="submit" class="btn btn-danger">
                                          ELIMINAR </button>
                                      </form>
                                    </td>
                                  </tr>
                                  @endforeach
                              </tbody>
                          </table>
                          <!--{!! $alumnos->links() !!}-->
                        </div>
                      </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>