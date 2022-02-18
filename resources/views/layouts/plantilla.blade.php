<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Esto indica que el nombre es variable entre vistas
    y entre paréntesis se encuentra su identificador -->
    <title>@yield('title')</title>
    <style>
        .active{
            color:blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    {{-- Se fragmenta las porciones de la plantilla en otros archivos
        para mayor claridad del contenido --}}
    {{-- la ruta está dada desde la carpeta views --}}
    @include('layouts.partials.header')

    @yield('content')

    @include('layouts.partials.footer')
</body>
</html>