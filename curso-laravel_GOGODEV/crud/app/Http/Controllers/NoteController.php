<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

/**
 * =================================================================================================================
 * CONTEXTO DE LA CLASE
 * =================================================================================================================
 *
 * Propósito:
 * Esta clase actúa como el controlador para la entidad 'Note'. En el patrón de diseño Modelo-Vista-Controlador (MVC),
 * el controlador es responsable de recibir las peticiones del usuario, interactuar con el modelo (la base de datos
 * a través de Eloquent en este caso) y devolver una vista al usuario.
 *
 * Flujo de Trabajo Típico:
 * 1. Una ruta (definida en `routes/web.php`) captura una petición HTTP (por ejemplo, '/notes').
 * 2. La ruta invoca un método de este controlador (por ejemplo, `index()`).
 * 3. El método `index()` utiliza el modelo `Note` para obtener los datos necesarios de la base de datos.
 * 4. Finalmente, el método `index()` pasa estos datos a una vista de Blade (`note.index`) que se encarga de
 *    renderizar el HTML que se enviará de vuelta al navegador del usuario.
 *
 * @see \App\Models\Note (El modelo Eloquent que representa la tabla 'notes' en la base de datos)
 * @see resources/views/note/index.blade.php (La vista que muestra la lista de notas)
 * @see resources/views/note/create.blade.php (La vista que muestra el formulario para crear una nota)
 */
class NoteController extends Controller
    {
    /**
     * -------------------------------------------------------------------------------------------------------------
     * MÉTODO: index
     * -------------------------------------------------------------------------------------------------------------
     *
     * Propósito:
     * Este método se encarga de mostrar una lista de todas las notas existentes.
     * Es la página principal para la sección de notas de la aplicación.
     *
     * @return \Illuminate\View\View
     *         Retorna una instancia de la clase View, que Blade compilará en HTML.
     */
    public function index()
        {
        /**
         * Interacción con el Modelo:
         * `Note::all()` es un método estático proporcionado por Eloquent (el ORM de Laravel).
         * Ejecuta una consulta SQL (`SELECT * FROM notes`) para obtener todos los registros de la tabla 'notes'.
         * El resultado es una Colección de Laravel, que es como un array "superpoderoso" de objetos `Note`.
         *
         * @var \Illuminate\Database\Eloquent\Collection<\App\Models\Note> $notes
         */
        $notes = Note::all();

        /**
         * Retorno de la Vista:
         * `view('note.index', compact('notes'))` hace dos cosas:
         * 1. Carga el archivo de la vista ubicado en `resources/views/note/index.blade.php`.
         * 2. Pasa los datos a la vista. `compact('notes')` es un atajo de PHP para crear un array asociativo
         *    ['notes' => $notes]. Dentro de la vista, ahora existirá una variable `$notes` que contiene la  colección de notas que obtuvimos de la base de datos.
         */
        return view('note.index', compact('notes'));
        }

    /**
     * -------------------------------------------------------------------------------------------------------------
     * MÉTODO: create
     * -------------------------------------------------------------------------------------------------------------
     *
     * Propósito:
     * Este método se encarga de mostrar el formulario para crear una nueva nota.
     * No procesa la creación de la nota, solo muestra la vista con los campos necesarios.
     *
     * @return \Illuminate\View\View
     *         Retorna una instancia de la clase View, que Blade compilará en HTML.
     */
    public function create()
        {
        /**
         * Retorno de la Vista:
         * `view('note.create')` carga el archivo de la vista ubicado en `resources/views/note/create.blade.php`.
         * En este caso, no necesitamos pasarle ningún dato, ya que es un formulario vacío.
         */
        return view('note.create');
        }


    public function store(Request $request)
        {
        // NOTA DE ESTUDIO: Diferencia entre $request->input('key') y $request->key
        //
        // 1. $request->input('key'):
        //    - Es el método explícito y más versátil.
        //    - Permite pasar un valor por defecto: $request->input('key', 'default').
        //    - Permite acceder a datos anidados con "dot notation": $request->input('user.name').
        //    - Considerado por muchos una mejor práctica por ser más claro.
        //
        // 2. $request->key:
        //    - Es un atajo o "propiedad mágica" que Laravel ofrece por conveniencia (azucar sintactico).
        //    - Es más corto y limpio para leer. Funciona bien para datos simples.
        //    - En el fondo, es un atajo para $request->input('key').
        /*     
        * //^ Opción  1 ===  (usando el método input() (más explícito)) ===:
        $note = new Note();
        $note->title = $request->input('title');
        $note->description = $request->input('description');
        $note->save(); */

        /*       
       * //^  Opcion 2 === (usando propiedades mágicas más corto Sin el input("...")) ===: 
         $note = new Note();
         $note->title = $request->title;
         $note->description = $request->description;
         $note->save();

        return redirect()->route('name_note.index');

        */



        /*      
        * //^ Opción 3 === (usando asignación masiva con $fillable en el modelo):===
            Note::create([
            'title'       => $request->title,
            'description' => $request->description,
         ]);

        return redirect()->route('name_note.index'); */


        //^ Opción 4 === (usando asignación masiva con $fillable y el método all() del request):===
        Note::create($request->all());

        return redirect()->route('name_note.index');

        }



    /*  
    // Uso del metode del array explicito para pasar datos a la vista  usado por el taller
    public function edit(Note $note)
            {
            return view('note.edit', ['note' => $note]);
            }
   */


    // uso del metodo  compact() de php para pasar datos a la vista (Modo magico) recomendado 
    public function edit(Note $note)
        {
        return view('note.edit', compact('note'));
        }

    }
