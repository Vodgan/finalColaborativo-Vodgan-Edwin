<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Registro de Estudiantes UMG</title>
</head>
<body>
@include("navbar")




<div class="row header-container justify-content-center">
    <div class="header">
        <h1>Registro de Estudiantes UMG</h1>
    </div>
</div>

@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="container-fluid mt-4">
            <div class="row justify-content-center">
                <section class="col-md-8">
                    @include("studentslist")
                </section>
            </div>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid mt-4 " id="create-form">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://d1o422jskmy5yw.cloudfront.net/wp-content/uploads/2018/03/clase-UMG-1024x683.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ingrese la información del nuevo estudiante:</h5>
                        <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Codigo</label>
                                <input name="codigo" type="text" class="form-control"  placeholder="Ingrese el codigo">
                            </div>
                            <div class="form-group">
                                <label>Nombre</label>
                                <input name="nombre" type="text" class="form-control"  placeholder="Ingrese el nombre">
                            </div>


                            <div class="form-group">
                                <label>Apellidos</label>
                                <input name="apellido" type="text" class="form-control"  placeholder="Ingrese apellidos">
                            </div>

                            <div class="form-group">
                                <label>Edad</label>
                                <input name="edad" type="text" class="form-control"  placeholder="Ingrese edad">
                            </div>
                            <div class="form-group">
                                <label>Genero</label>
                                <input name="genero" type="text" class="form-control"  placeholder="Ingrese genero">
                            </div>
                            <input type="submit" class="btn btn-info" value="Guardar">
                            <input type="reset" class="btn btn-warning" value="Reiniciar">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@elseif($layout == 'show')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col">
                @include("studentslist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentslist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="https://d1o422jskmy5yw.cloudfront.net/wp-content/uploads/2018/03/clase-UMG-1024x683.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Actualizar la información del estudiante</h5>
                        <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Codigo</label>
                                <input value="{{ $student->codigo }}" name="cne" type="text" class="form-control"  placeholder="Ingrese el codigo">
                            </div>
                            <div class="form-group">
                                <label>Nombres</label>
                                <input value="{{ $student->nombre }}" name="firstName" type="text" class="form-control"  placeholder="Ingrese los nombre">
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input value="{{ $student->apellido }}" name="secondName" type="text" class="form-control"  placeholder="Ingrese apellidos">
                            </div>
                            <div class="form-group">
                                <label>Edad</label>
                                <input value="{{ $student->edad }}" name="age" type="text" class="form-control"  placeholder="Ingrese edad">
                            </div>
                            <div class="form-group">
                                <label>Genero</label>
                                <input value="{{ $student->genero }}" name="speciality" type="text" class="form-control"  placeholder="Ingrese género">
                            </div>
                            <input type="submit" class="btn btn-info" value="Actualizar">
                            <input type="reset" class="btn btn-warning" value="Reiniciar">

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endif

<footer></footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
