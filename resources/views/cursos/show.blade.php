@extends('layouts.plantilla')

@section('title', 'Curso '.$curso->name)
    
@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>

    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <br>
    {{-- Se le envía el objeto para obtener su id --}}
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>

    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>

@endsection
