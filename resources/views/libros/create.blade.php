<div class="container pt-4">
    <ul>
    @foreach ($errors->all() as $error)
        <li  class="text-danger">{{ $error }}</li>
    @endforeach
    </ul>

    @if($datos['exito'])

        <p class="alert alert-success"> {{ $datos['exito'] }} </p>

    @endif



    <form action="{{ route('libro.edit.post', $libro->id) }}" method="POST">

        @csrf

        <input name="id" type="hidden" value="{{ $libro->id }}" />
        <div class="mb-3">
            <label for="idtitulo" class="@error('titulo') text-danger @enderror form-label">Título</label>
            <input {{ $disabled }} value="{{ old('titulo',$libro->titulo) }}" type="text" name="titulo" class="@error('titulo') is-invalid @enderror form-control" id="idtitulo" aria-describedby="libroHelp">
            @error('titulo')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div id="libroHelp" class="form-text">El título del libro.</div>
        </div>

        <div class="mb-3">
            <label for="idautor" class="@error('autor') text-danger @enderror form-label">Autor</label>
            <input {{ $disabled }}  value="{{ old('autor',$libro->autor) }}" type="text"  name="autor" class="@error('autor') is-invalid @enderror form-control" id="idautor" aria-describedby="autorHelp">
            @error('autor')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div id="autorHelp" class="form-text">El autor del libro.</div>
        </div>
        <div class="mb-3">

            <label for="idanho" class="@error('anho') text-danger @enderror form-label">Año publicación</label>
            <select  {{ $disabled }} class="@error('anho') is-invalid @enderror form-select" aria-label="2026" id="idanho" name="anho" aria-describedby="anhoHelp">
                <option></option>
                @php

                    $options = '';
                    for($anho= date('Y')-10; $anho <= date('Y'); $anho++)
                    {
                        $selected = $anho == $libro->anho ? 'selected' : '';

                        $options .= "<option value=\"{$anho}\" {$selected}>{$anho}</option>";
                    }

                        //$selected = $clave_genero == $libro->genero ? 'selected' : '';
                    echo $options;
                @endphp

                

            </select>
            @error('anho')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div id="anhoHelp" class="form-text">El año en que se publicó el libro.</div>
        </div>

        <div class="mb-3">

            <label for="idgenero" class="@error('genero') text-danger @enderror form-label">Género</label>
            <select  {{ $disabled }} class="@error('genero') is-invalid @enderror form-select" aria-label="Horror" id="idgenero" name="genero" aria-describedby="generoHelp">

                @foreach ($cods_genero as $clave_genero => $texto_genero)    

                    @php

                        $selected = $clave_genero == $libro->genero ? 'selected' : '';

                    @endphp

                    <option value="{{ $clave_genero }}" {{ $selected }}>{{ $texto_genero }}</option>
                @endforeach
            </select>
            @error('genero')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div id="generoHelp" class="form-text">El género literario.</div>
        </div>

        <div class="mb-3">
            <label for="iddescripcion" class="@error('descripcion') text-danger @enderror form-label">Descripción</label>
            <textarea  {{ $disabled }} class="@error('descripcion') is-invalid @enderror form-control" name="descripcion" id="iddescripcion" rows="3">{{ old('descripcion',$libro->descripcion) }}</textarea>
            @error('descripcion')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        @if (!$disabled)
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif

        @if ($oper == 'destroy')
            <button type="submit" class="btn btn-danger">Eliminar libro</button>
        @endif
    </form>
    
    <button type="button" class="btn btn-info mt-3" data-bs-dismiss="modal">Volver</button>
</div>

