@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>Página para editar un curso</h1>

    <form action="{{route('cursos.update', $curso)}}" method="POST">
        {{-- Token de validación --}}
        @csrf

        {{-- Como HTML solo reconoce los métodos post y get
            hay que indicarle a Laravel el método que se va a aplicar
            para la actualización de datos y así redirigira a la ruta 
            correspondiente--}}
        @method('put')
        <label for="">Nombre: </label>
        <br>
        <input type="text" name="name" value="{{$curso->name}}">

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>        
        <br>

        <label for="">Descripción: </label>
        <br>
        <textarea name="description" id="" rows="5">{{$curso->description}}</textarea>
        <br><br>

        <label for="">Categoría: </label>
        <br>
        <input type="text" name="categoria" value="{{$curso->categoria}}">
        <br><br>

        <input type="submit" value="Actualizar Formulario">
    </form>
@endsection
