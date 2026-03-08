{{--
La directiva @extends indica que esta vista "hija" extiende un layout base.
(vista Padre) En este caso, el layout se encuentra en 'layouts.note.layout-index', lo que corresponde
a la ruta 'resources/views/layouts/note/layout-index.blade.php' sin la extensión .blade.php.

El layout base define la estructura general de la página, incluyendo el HTML, head, body,
y puntos de inserción para el contenido específico de cada página. Las vistas "hijas"
pueden rellenar estas secciones con su propio contenido, permitiendo una gran flexibilidad
y reutilización del código. --}}
@extends('layouts.note.layout-index')

{{--
@push('styles'): "Empuja o Inyecta" este bloque de código a la pila (stack) 'styles' en el layout.
Así es como añadimos CSS específico para esta página sin ensuciar el layout. }}
--}}
@push('styles')
    <style>
        .color_1 {
            color: #2403fe;
        }

        .color_2 {
            color: #fe8103;
        }

        .color_3 {
            color: #ff0000;
        }
    </style>
@endpush




{{--
La directiva @section('title', 'Mi Título') define el contenido de una sección del layout base.
--}}
@section('title', 'Página Index')



{{--
La directiva @section('...') .... @endsection define el contenido de una sección del layout base.
--}}
@section('mainContent')
    <h1 class='color_2'>Hola Mundo laravel Index</h1>

    <div class="container mt-5" style="width: 80%;">
        <div class="card">
            <!-- Añadido padding interno a card-body -->
            <div class="card-body p-4">
                <div class="card-header">

                    <h1 class="text-primary">Listado de Notas</h1>
                </div>
                <div class="p-4">

                    <button class=" btn btn-primary" onclick="location.href='{{ route('name_note.create') }}'"> Insetar Nota
                        Nueva &raquo</button>
                </div>
                <table class="table table-striped  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nota</th>
                            <th>Descripción</th>
                            <th>Mostrar</th>
                            <th>Editar</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($notes as $note)
                                <tr>
                                    <td>{{ $note->title }}</td>
                                    <td>{{ $note->description }}</td>

                            {{-- //Opcion de Mostrar la nota --}}
                            <td>
                                <a href="{{ route('name_note.show', ['note' => $note->id]) }}" class="btn btn-info">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>


                                    {{-- //Opcion de editar la nota --}}
                                    <td>
                                        <a href="{{ route('name_note.edit', ['note' => $note->id]) }}" class="btn btn-warning">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                    </td>



                                    {{-- Opción de Eliminar la nota --}}
                                    <td>
                                        <form action="{{ route('name_note.destroy', $note) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">No hay notas disponibles.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
