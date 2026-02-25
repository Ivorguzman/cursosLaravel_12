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
	<h1 class="color">Hola mundo laraven desde edit</h1>
	<a href="{{route('name_note.index')}}" class='color'>
		<== Regresar a Index</a>
@endsection
