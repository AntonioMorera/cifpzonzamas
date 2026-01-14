<form action="/procesar-datos" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="number" name="edad" placeholder="Edad">
    <button type="submit">Enviar</button>
</form>