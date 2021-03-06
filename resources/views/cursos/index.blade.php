@extends('layouts.plantilla')

@section('title', 'Cursos')
    
@section('content')
    
    <h1>Bienvenido a la página principal de cursos</h1>

    {{-- Redirige a la vista create, se usa el nombre que se le asigno a la ruta --}}
    <a href="{{route('cursos.create')}}">Crear Curso</a>

    {{-- la directiva foreach permite iterar a través de los datos --}}
    <ul>
        @foreach ($cursos as $curso)
            {{-- Así se obtiene el valor de los atributos en la variable
                y se imprimen en el navegador --}}
            <li>
                {{-- Apunta a la vista show y le envía el id del elemento actual, 
                    los argumentos son: 1. ruta de la vista 2. valor que se le envía --}}
                <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
            </li>

        @endforeach
    </ul>
    {{-- Este método permite recorrer las paginaciones de los 
        registros apareciendo dos links para previous y next --}}
    {{$cursos->links()}}
@endsection

