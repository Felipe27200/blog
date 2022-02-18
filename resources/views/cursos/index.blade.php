@extends('layouts.plantilla')

@section('title', 'Cursos')
    
@section('content')
    
    <h1>Bienvenido a la página principal de cursos</h1>

    {{-- la directiva foreach permite iterar a través de los datos --}}
    @foreach ($cursos as $curso)
        <ul>
            {{-- Así se obtiene el valor de los atributos en la variable
                y se imprimen en el navegador --}}
            <li>{{$curso->name}}</li>
            <li>{{$curso->description}}</li>
            <li>{{$curso->categoria}}</li>
        </ul>        
    @endforeach
@endsection

