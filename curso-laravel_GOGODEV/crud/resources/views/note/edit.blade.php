{{--
1. La directiva @extends indica que esta vista "hija" extiende un layout base.
(vista Padre) En este caso, el layout se encuentra en 'layouts.note.layout-index', lo que corresponde
a la ruta 'resources/views/layouts/note/layout-index.blade.php' sin la extensión .blade.php.

El layout base define la estructura general de la página, incluyendo el HTML, head, body,
y puntos de inserción para el contenido específico de cada página. Las vistas "hijas"
pueden rellenar estas secciones con su propio contenido, permitiendo una gran flexibilidad
y reutilización del código. --}}
@extends('layouts.note.layout-index')



{{--
2. @push('styles'): "Empuja" este bloque de código a la pila (stack) 'styles' en el layout.
Así es como añadimos CSS específico para esta página sin ensuciar el layout.
--}}
@push('styles')
    <style>
        .form-create {
            /* Estilos del formulario */
            max-width: 300px;
            margin: 0 auto;
            padding: 16px;
            border: 1px solid #2403fe;
            border-radius: 8px;
            background: #a8e4f4;
        }

        .label-form {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: rgb(13, 77, 106);
        }

        .color {
            color: #2403fe;
        }
    </style>
@endpush





{{--
2. @section('title', ...): Define el contenido para la sección 'title'.
Como es una línea corta, podemos pasar el contenido como segundo argumento.
--}}
@section('title', 'Editar Nota')



{{--
3. @section('mainContent'): Define el bloque de contenido principal.
Todo lo que esté aquí adentro se insertará donde este @yield('mainContent') en el layout.
--}}
@section('mainContent')

    <h1 class="color">Formulario Editar Nota</h1>
    <a href="{{route('name_note.index')}}" class='color'>
        <== Regresar a Index</a>
{{-- action="{{ route('name_note.destroy', $note) }}" --}}
            <form class="form-create" action="{{ route('name_note.update', $notaEditar->id ) }}" method="POST" >
                @method('PUT')
                {{--
                5. @csrf: Es una directiva de Blade crucial para la seguridad.
                Propósito: Proteger la aplicación contra ataques de "Cross-Site Request Forgery" (CSRF).
                Mecanismo: Genera un campo <input> oculto en el formulario que contiene un "token" (un valor único y
                secreto).
                Verificación: Cuando el formulario se envía, el middleware de Laravel intercepta la petición y comprueba que
                este token coincida con el que está almacenado en la sesión del usuario.
                Resultado: Si el token falta o no coincide, la petición se rechaza (normalmente con un error 419 "Page
                Expired"), asegurando que solo los formularios generados por nuestra propia aplicación puedan enviar datos.
                --}}
                @csrf
                <label class="label-form" for="title">Título:</label>
                <input type="text" id="title" name="title" value="{{ $notaEditar->title }}">
                <br>
                <br>
                <label class="label-form " for="description">Contenido:</label>
                <textarea id="description" name="description">{{ $notaEditar->description }}</textarea>
                <br>
                <br>
                <button class="color" type="submit">Salvar edición de Nota</button>
@endsection
