@extends('layout')
@section('title', 'Listado de libros')
@section('contenido')


<form action="/procesar-datos" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" name="nombre" placeholder="Nombre">
<input type="text" name="edad" placeholder="Edad">
<button type="submit">Enviar</button>
</form>

@endsection



