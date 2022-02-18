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

        // Se le indica que ordene los registros de forma descendente
        $cursos = Curso::orderBy('id', 'desc')->paginate();

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

    // MÉTODO PARA INSERTAR DATOS

    // Request recibe los datos de al solicitud, que es lo que significa
    public function store(Request $request){
        $curso = new Curso();

        // Se almacena los valores del request en el objeto
        // del modelo curso, los atributos del request corresponden
        // al indentificador del formulario para los inputs
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        // Así almacena los datos en la BD
        $curso->save();

        // Se va a llamar a la ruta que muestra un solo registro
        // se le envía el id, ya que su método lo requiere
        /* Con enviar el objeto basta, pues laravel buscará de 
        forma automática el id en él */
        return redirect()->route('cursos.show', $curso);
    }

    // MÉTODO QUE MUESTRA UN ELEMENTO EN PARTICULAR
    public function show($id)
    {
        // Busca el elemento con que corresponda con ese id
        $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));

    }

    // MÉTODO PARA EDITAR DATOS
    public function edit($id){
        $curso = Curso::find($id);

        return $curso;
    }
    // Estos métodos pueden tener ser nombrados de cualquier forma
}
