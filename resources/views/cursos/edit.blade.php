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
        {{-- El segundo argumento establece el valor que puede llegar a tener old()
            al momento de iniciar --}}
        <input type="text" name="name" value="{{old('name', $curso->name)}}">

        @error('name')
            <br>
            <small>{{$message}}</small>
            <br>
        @enderror
        <br>        
        <br>

        <label for="">Descripción: </label>
        <br>
        <textarea name="description" id="" rows="5">{{old('description', $curso->description)}}</textarea>
        @error('description')
            <br>
            <small>{{$message}}</small>
        @enderror
        <br><br>

        <label for="">Categoría: </label>
        <br>
        <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        @error('categoria')
            <br>
            <small>{{$message}}</small>
        @enderror
        <br><br>

        <input type="submit" value="Actualizar Formulario">
    </form>
@endsection
