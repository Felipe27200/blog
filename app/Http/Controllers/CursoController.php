<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Este controlador va a gestionar 3 rutas distintas

    // MÉTODO ENCARGADO DE GESTIONAR LA PÁG. PRINCIPAL
    public function index()
    {
        // Se usa el método paginate() del modelo para
        // obtener todos los registros de la tabla cursos
        // De esta forma se muestran los cursos paginados cada 15 registros
        // localhost/blog/public/cursos?page=numero || Así se accede a los 
        // siguientes registros paginados
        $cursos = Curso::paginate();

        // Así cuando entre a la función redirigira
        // a la vista index.php, el punto después de curso indica que este
        // es una carpeta
        return view('cursos.index', compact('cursos'));
    }
    
    // MÉTODO ENCARGADO DE MOSTRAR LOS FORMULARIOS DE INSERCIÓN
    public function create()
    {
        return view('cursos.create');
    }

    // MÉTODO QUE MUESTRA UN ELEMENTO EN PARTICULAR
    public function show($id)
    {
        // Busca el elemento con que corresponda con ese id
        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));

    }

    // Estos métodos pueden tener ser nombrados de cualquier forma
}
