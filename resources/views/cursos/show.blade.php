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

    {{-- Para redirigir al método delete se debe usar un formulario,
        ya que con una url en un enlance este trata de redirigir al enlace
        mediante el método GET --}}
    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>
    </form>
@endsection
