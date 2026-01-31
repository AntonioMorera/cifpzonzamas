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
                        <a href="/libro/show/{{ $libro->id }}" class="btn btn-primary"><i class="bi bi-search"></i></a>
                        <a href="/libro/edit/{{ $libro->id }}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        <a href="/libro/destroy/{{ $libro->id }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
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

    <a class="btn btn-primary" href="{{ route('libro.create') }}">Nuevo Libro</a>

</div>
