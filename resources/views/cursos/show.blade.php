@extends('layouts.plantilla')

@section('title', 'Curso '.$curso->name)
    
@section('content')
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->description}}</p>

@endsection
