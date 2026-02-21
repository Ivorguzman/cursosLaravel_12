{{--
       La directiva @extends indica que esta vista "hija" extiende un layout base.
       En este caso, el layout se encuentra en 'layouts.note.layout-index', lo que corresponde
       a la ruta 'resources/views/layouts/note/layout-index.blade.php' sin la extensión .blade.php.
   
       El layout base define la estructura general de la página, incluyendo el HTML, head, body,
       y puntos de inserción para el contenido específico de cada página. Las vistas "hijas"
       pueden rellenar estas secciones con su propio contenido, permitiendo una gran flexibilidad
       y reutilización del código. --}}
@extends('layouts.note.layout-index')

{{--
    @push('styles'): "Empuja o Inyecta" este bloque de código a la pila (stack) 'styles' en el layout.
     Así es como añadimos CSS específico para esta página sin ensuciar el layout.  }}
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
La directiva @section('title', 'Mi Título')  define el contenido de una sección del layout base.
 --}}
@section('title', 'Página Index')



{{--
  La directiva @section('...') .... @endsection define el contenido de una sección del layout base.
   --}}
@section('mainContent')
    <h1 class='color_2'>Hola Mundo laravel Index</h1>
    <ul>
        <h2 class='color_1'>listado de notas: </h2>
        <li>
            @forelse ($notes as $note)
        <li class="color_1">{{ $note->title }}</li>
    @empty
        <p class="color_3">=== No hay notas disponibles ===</p>
        @endforelse
        </li>
    </ul>
@endsection
