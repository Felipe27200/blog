@extends('layouts.plantilla')

@section('title', 'Cursos Create')

@section('content')
    <h1>Página para crear un curso</h1>

    {{-- El método post permite acceder a la ruta correspondiente --}}
    <form action="{{route('cursos.store')}}" method="POST">
        {{-- Token de validación --}}
        @csrf

        <label for="">Nombre: </label>
        <br>
        <input type="text" name="name">
        <br><br>

        <label for="">Descripción: </label>
        <br>
        <textarea name="description" id="" rows="5"></textarea>
        <br><br>

        <label for="">Categoría: </label>
        <br>
        <input type="text" name="categoria">
        <br><br>

        <input type="submit" value="Enviar Formulario">
    </form>
@endsection
