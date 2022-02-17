<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Este controlador va a gestionar 3 rutas distintas

    // MÉTODO ENCARGADO DE GESTIONAR LA PÁG. PRINCIPAL
    public function index()
    {
        // Así cuando entre a la función redirigira
        // a la vista index.php, el punto después de curso indica que este
        // es una carpeta
        return view('cursos.index');
    }
    
    // MÉTODO ENCARGADO DE MOSTRAR LOS FORMULARIOS DE INSERCIÓN
    public function create()
    {
        return view('cursos.create');
    }

    // MÉTODO QUE MUESTRA UN ELEMENTO EN PARTICULAR
    public function show($curso)
    {
        return view('cursos.show', ['curso' => $curso ]);

    }

    // Estos métodos pueden tener ser nombrados de cualquier forma
}
