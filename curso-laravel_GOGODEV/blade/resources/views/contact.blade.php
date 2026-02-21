{{--
    ==== QUÉ ES ====
    Esta es una "Vista Hija". Su propósito es definir el contenido único de una página específica (en este caso, la página de contacto).
    No contiene la estructura HTML completa (<html>, <head>, etc.) porque la "hereda" de una plantilla maestra.

    ==== CÓMO FUNCIONA ====
     1. `@extends('layouts.landing')` le dice a Blade: "Usa `resources/views/layouts/landing.blade.php` como mi esqueleto".
        OjO==> ESTA DEBE SER SIEMPRE LA PRIMERA LÍNEA DE UNA VISTA HIJA.
     2. `@section('name', 'value')` o `@section('name') ... @endsection` se usa para "rellenar" los "huecos" indicados con en la pagina maestra landig.blade.php (`@yield`) osea 
    que fueron definidos en la plantilla maestra descrita anteriormente.

    ==== POR QUÉ SE USA ====
    Para mantener el contenido de la página separado de la estructura del sitio. Esto hace que el desarrollo
    sea mucho más limpio y organizado. Solo te concentras en el contenido específico de esta página.
--}}


{{-- 1. Heredamos la estructura completa de nuestra plantilla maestra. --}}
@extends('layouts.landing')


{{-- 2. Asignamos el texto que aparecerá en la pestaña del navegador para esta página. --}}
@section('title', 'Contacto')


{{-- 3. Definimos el contenido principal y único que se inyectará en el @yield('content'). --}}
@section('main')

    {{-- Usamos el componente de encabezado con el título correspondiente a esta página. --}}
    <x-page-header title="Ponte en Contacto">
        {{-- Y un subtítulo que irá al `$slot` del componente. --}}
        Nos encantaría saber de ti.
    </x-page-header>


    {{-- Contenido específico para la página de contacto. --}}
    <div class="main-content">
        <p>
            Este es el final de nuestro ejemplo práctico. ¡Felicidades!
        </p>
        <p>
            Ahora tienes un mini-proyecto funcional que demuestra cómo las directivas de Blade (`extends`, `section`, `yield`, `include`) y los componentes (`x-component`) trabajan en armonía para crear un sitio web limpio, mantenible y escalable.
        </p>
        <div class="alert alert-success">
            {{-- `class="alert alert-success"` es una clase de Bootstrap para mostrar un mensaje destacado con fondo verde. --}}
            <strong>Siguiente paso:</strong> Revisa cada uno de los archivos que hemos creado, lee los comentarios y experimenta cambiando cosas para ver cómo afectan el resultado final.
        </div>
    </div>

{{-- Fin de la sección de contenido. --}}
@endsection
