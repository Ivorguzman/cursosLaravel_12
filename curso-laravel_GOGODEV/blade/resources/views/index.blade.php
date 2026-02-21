{{--
    ==== QUÉ ES ====
    Esta es una "Vista Hija". Su propósito es definir el contenido único de una página específica (en este caso, la página de inicio).
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


{{-- `@extends('layouts.landing')`: Hereda toda la estructura del archivo `landing.blade.php` --}}
@extends('layouts.landing')


{{--
    `@section('title', 'Página de Inicio')`:
    - `@section`: Directiva para definir el contenido de una sección.
    - `'title'`: Es el nombre de la sección que queremos rellenar. Corresponde al `@yield('title')` en el layout.
    - `'Página de Inicio'`: Es el contenido que queremos poner en esa sección. Como es una cadena de texto simple,
      podemos usar esta sintaxis corta de `@section`.
--}}
@section('title', 'Página de Inicio')


{{--
    `@section('content') ... @endsection`:
    - Esta es la sintaxis de bloque para una sección. La usamos cuando el contenido que queremos inyectar
      es un bloque de HTML más complejo, no solo una línea de texto.
    - Todo lo que está entre `@section('content')` y `@endsection` será inyectado en el lugar
      donde pusimos `@yield('content')` en la plantilla maestra.
--}}
@section('main')

    {{--
        `<x-page-header>`:
        - ESTO ES USAR UN COMPONENTE. Blade ve la sintaxis `<x-...>` y busca un componente en `resources/views/components/`.
        - Como nuestro componente se llama `page-header.blade.php`, lo llamamos con `<x-page-header>`.
        - `title="Bienvenido a GogoDev"`: Esto es pasar una "prop" (propiedad) al componente. El string "Bienvenido a GogoDev"
          se asignará a la variable `$title` dentro del archivo del componente.
    --}}
    <x-page-header title="Bienvenido a practicar Laravel con una mini landing page">
        {{--
            Todo el contenido que ponemos AQUÍ, entre la etiqueta de apertura y cierre del componente,
            será capturado e inyectado en la variable `$slot` dentro del componente.
        --}}
        Esta es la página principal de nuestro proyecto de práctica en Blade.
    </x-page-header>


    {{--
        Contenido específico de esta página.
        `<div>` es un contenedor genérico.
        `<p>` es una etiqueta de párrafo.
        `class="lead"` es una clase de Bootstrap que hace que el texto del párrafo sea un poco más grande y destacado.
    --}}
    <div class="main-content">
        <p class="lead">
            Aquí puedes ver cómo esta vista (`index.blade.php`) solo se preocupa por su propio contenido.
            La barra de navegación y la estructura HTML general vienen de `layouts/landing.blade.php`.
        </p>
        <p>
            Hemos usado nuestro componente x-page-header` para mostrar el título de la página de una forma estandarizada y
            reutilizable.
        </p>
    </div>

    {{-- `@endsection` marca el final del bloque de la sección 'content'. --}}
@endsection
