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
        <input type="text" name="name" value="{{old('name')}}">

        {{-- La directiva atrapa el error si es que ocurre uno en la validación --}}
        @error('name')
            {{-- Así imprimira el mensaje en caso de generarse un error --}}
            <br>
            <small>{{$message}}</small>
        @enderror   
        <br><br>

        <label for="">Descripción: </label>
        <br>
        <textarea name="description" id="" rows="5" >{{old('description')}}</textarea>

        @error('description')
            <br>
            <small>{{$message}}</small>
        @enderror
        <br><br>

        <label for="">Categoría: </label>
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">

        @error('categoria')
            <br>
            <small>{{$message}}</small>
        @enderror

        <br><br>

        <input type="submit" value="Enviar Formulario">
    </form>
@endsection
