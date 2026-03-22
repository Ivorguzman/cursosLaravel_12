<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

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
     * Muestra una lista de todas las notas.
     */
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    /**
     * Muestra el formulario para crear una nueva nota.
     */
    public function create(): View
    {
        return view('note.create');
    }

    /**
     * Almacena una nueva nota en la base de datos.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'       => 'required|string|min:4|max:255',
            'description' => 'required|string|min:4|max:255',
        ]);

        Note::create($request->all());
        return redirect()->route('name_note.index');
    }

    /**
     * Muestra una nota específica.
     * Uso de Route-Model Binding para inyectar automáticamente la instancia del modelo.
     */
    public function show(Note $note): View
    {
        // Pasamos la nota a la vista con el nombre 'notaMotrar' para coincidir con la vista existente.
        return view('note.show', ['notaMotrar' => $note]);
    }

    /**
     * Muestra el formulario para editar una nota existente.
     * Uso de Route-Model Binding.
     */
    public function edit(Note $note): View
    {
        
        // Pasamos la nota a la vista con el nombre 'note' que ya corregimos en el paso anterior.
        return view('note.edit', compact('note'));
    }

    /**
     * Actualiza una nota específica en la base de datos.
     */
    public function update(Request $request, Note $note): RedirectResponse
    {
        $request->validate([
            'title'       => 'required|string|min:4|max:255',
            'description' => 'required|string|min:4|max:255',
        ]);

        $note->update($request->all());
        return redirect()->route('name_note.index');
    }

    /**
     * Elimina una nota específica de la base de datos.
     */
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('name_note.index');
    }
}
