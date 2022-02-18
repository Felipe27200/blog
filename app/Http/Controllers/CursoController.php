<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

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

        // Validar formularios mediante laravel

        // Este método se encarga de validar los valores en los formularios
        // detiene el flujo del programa para hacerlo, en caso de que no se 
        // validen retorna al formulario
        $request->validate([
            // Nombre campo | validación
            'name' => 'required',
            'description' => 'required',
            'categoria' => 'required'
        ]);

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
    public function show(Curso $curso)
    {
        // // Busca el elemento con que corresponda con ese id
        // $curso = Curso::find($id);

        return view('cursos.show', compact('curso'));
    }

    // MÉTODO PARA RECIBIR DATOS A EDITAR

    /* Si se le antepone el nombre de la clase, Laravel lo toma 
    como que se quiere que curso (argumento) sea una instancia de Curso, 
    que tenga el id correspondiente del valor que recibe*/
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    // MÉTODO PARA EDITAR LOS DATOS DE UN REGISTRO
    public function update(Request $request, Curso $curso){
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;

        // Guarda los datos en la BD
        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
    // Estos métodos pueden tener ser nombrados de cualquier forma
}
