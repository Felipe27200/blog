<!-- Aquí se le define que extienda al template plantilla.blade.php -->
@extends('layouts.plantilla')

<!-- Esto le define un valor a la variable title en el yield
de la plantilla -->
@section('title', 'Nosotros')

<!-- Esto permite definirle varios parámetros a la sección -->
@section('content')
    <!-- Esto son los datos que se le asignan al yield('content') del
    template -->
    <h1>Nosotros</h1>
@endsection
