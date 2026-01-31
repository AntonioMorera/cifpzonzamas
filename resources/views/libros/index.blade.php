
<div class="container pt-4">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Género</th>
                <th scope="col">Año</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libro)
                <tr>
                    <th>
                        <a class="btn btn-primary btn-modal" data-url="/libro/show/{{ $libro->id }}"><i class="bi bi-search"></i></a>
                        <a class="btn btn-success btn-modal" data-url="/libro/edit/{{ $libro->id }}"><i class="bi bi-pencil-square"></i></a>
                        <a class="btn btn-danger btn-modal"  data-url="/libro/destroy/{{ $libro->id }}"><i class="bi bi-trash"></i></a>
                    </th>
                    <td>{{ $libro->titulo }}</td>
                    <td>{{ $libro->autor }}</td>
                    <td>{{ $cods_genero[$libro->genero] }}</td>
                    <td>{{ $libro->anho }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    {{ $libros->links() }}

    <a class="btn btn-primary btn-modal" data-url="{{ route('libro.create') }}">Nuevo Libro</a>

</div>

