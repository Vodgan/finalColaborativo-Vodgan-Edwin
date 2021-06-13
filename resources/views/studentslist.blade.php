
<div class="card mb-3">
    <img src="https://i.ytimg.com/vi/JvDv8KSgHds/maxresdefault.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Listado de estudiantes</h5>
        <p class="card-text">Puedes encontrar aquí toda la información sobre los estudiantes.</p>

        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Edad</th>
                <th scope="col">Genero</th>
                <th scope="col">Acciones</th>

            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->cne }}</td>
                    <td>{{ $student->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->speciality }}</td>
                    <td>

                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Editar</a>

                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
