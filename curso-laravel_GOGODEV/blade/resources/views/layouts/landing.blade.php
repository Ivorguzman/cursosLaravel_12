{{--
    ==== QUÉ ES ====
    Esta es la "Plantilla Maestra", "Padre" o lamadas  "Layout". Es el esqueleto HTML base para todo el sitio.
    Contiene todo el código que se repite en cada página: la estructura HTML, el <head>, la barra de navegación, el pie de página, etc.

    ==== CÓMO FUNCIONA ====
    Esta plantilla define "huecos" o "secciones" vacías usando la directiva `@yield('nombre')`.
    Las vistas "hijas" (como `index.blade.php`) usarán la directiva `@extends('layouts.landing')` para heredar
    toda esta estructura y luego usarán `@section('nombre')` para rellenar los huecos definidos aquí.

    ==== POR QUÉ SE USA ====
    Para no tener que repetir la estructura HTML completa en cada una de las páginas de tu sitio.
    Permite tener un diseño consistente y facilita enormemente el mantenimiento. Si quieres añadir
    una nueva hoja de estilos CSS a todo el sitio, solo la añades en este archivo.
--}}

{{-- `<!DOCTYPE html>` declara que este documento es de tipo HTML5. --}}
<!DOCTYPE html>

{{--
    `<html>` es el elemento raíz de una página HTML.
    `lang` es un atributo que especifica el idioma del contenido del documento. Es importante para la accesibilidad y el SEO.
    `{{ str_replace('_', '-', app()->getLocale()) }}`:
        - `app()->getLocale()`: Es una función de Laravel que obtiene el idioma actual configurado en la aplicación (ej. "en" o "es_ES").
        - `str_replace(...)`: Es una función de PHP que reemplaza un texto por otro. Aquí, reemplaza guiones bajos "_" por guiones "-", porque el estándar HTML para idiomas usa guiones (ej. "es-ES").
        - POR QUÉ: Hace que el idioma de la página sea dinámico y se ajuste a la configuración de tu app.
--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- `<head>` contiene metadatos sobre el documento, como el título, los estilos y los scripts. --}}

    <head>
        {{-- `<meta charset="UTF-8">` define el conjunto de caracteres del documento, UTF-8 incluye casi todos los caracteres y símbolos. --}}
        <meta charset="UTF-8">
        {{-- `<meta name="viewport" ...>` es crucial para el diseño responsivo. Hace que la página se adapte al ancho del dispositivo. --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{--
        `<title>` define el título del documento que se muestra en la pestaña del navegador.
        `@yield('title', 'Practica Landing Page')`:
            - `@yield('title')`: ESTE ES EL === HUECO===. Aquí le decimos a Blade: "En este lugar exacto, inserta el contenido de la sección llamada 'title' que sen definirá la vista hija".
            - `'Practica Landing Page'`: Este es un VALOR POR DEFECTO. Si la vista hija no define una sección 'title', se usará este texto. Es muy útil para tener un fallback.
    --}}
        <title>@yield('title', 'Practica Landing Page')</title>

        {{--
        `<link>` se usa para enlazar recursos externos, como hojas de estilo CSS.
        `rel="stylesheet"` le dice al navegador que este es un archivo de estilos.
        `href` es la ruta al archivo.
        `{{ asset('assets/css/bootstrap.min5.css') }}`:
            - `asset(...)` es un helper de Laravel que genera la URL correcta a un archivo en la carpeta `public`.
            - POR QUÉ: Si tu aplicación está en un subdirectorio (ej. `misitio.com/mi-app/`), `asset` generará la ruta completa correcta, mientras que una ruta relativa (`/css/app.css`) podría fallar.
    --}}
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min5.css') }}">
    </head>

    {{-- `<body>` contiene todo el contenido visible de la página web. --}}

    <body>
        <header>

            {{--
    `@include('partials.menu')`:
        - `@include`: Esta directiva le dice a Blade: "Busca el archivo `partials/menu.blade.php` y pega todo su contenido aquí".
        - POR QUÉ: Como la barra de navegación es la misma en todas las páginas, la extraemos a un archivo parcial (`partials/menu.blade.php`) y simplemente la incluimos aquí. Esto es reutilización de código.
--}}
            @include('partials.menu')
        </header>

        {{--
        `<main>` es una etiqueta semántica de HTML5 que debe contener el contenido principal y único de una página.
        `class="container mt-4"`:
            - `container`: Clase de Bootstrap que centra el contenido y le da un ancho máximo.
            - `mt-4`: Clase de Bootstrap que añade un `margin-top` (margen superior) para separar el contenido de la barra de navegación.
    --}}
        <main class="container mt-4">
            @yield('main')
            {{--
            `@yield('content')`:
            - ESTE ES EL HUECO MÁS IMPORTANTE. Aquí es donde cada página hija (index, about, contact, service, etc.) inyectará su contenido principal y único.
            - A diferencia del título, aquí no ponemos un valor por defecto, porque no tiene sentido que una página no tenga contenido.
        --}}
        </main>

        {{--
        `<script>` se usa para enlazar o escribir código JavaScript.
        `src` es la ruta al archivo de script.
        Se suelen poner los scripts al final del `<body>` para que la página se muestre visualmente al usuario lo más rápido posible,
        sin tener que esperar a que se descarguen y ejecuten todos los scripts.
    --}}
        <script src="{{ asset('assets/js/bootstrap.bundle.min5.js') }}"></script>

    </body>

</html>
