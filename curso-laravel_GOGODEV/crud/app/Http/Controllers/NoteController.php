<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Note;
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
    }
