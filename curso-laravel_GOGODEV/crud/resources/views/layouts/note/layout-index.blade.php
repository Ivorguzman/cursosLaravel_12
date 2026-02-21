{{--
    =================================================================================================================
    CONTEXTO DEL ARCHIVO DE LAYOUT
    =================================================================================================================

    Propósito:
    Este archivo es una plantilla o "layout" de Blade. Su función es definir la estructura HTML base que
    compartirán múltiples páginas. En lugar de repetir el mismo código HTML (como el <head>, <body>, etc.)
    en cada vista, podemos definirlo una sola vez aquí.

    Las vistas "hijas" (como `create.blade.php` o `index.blade.php`) pueden "extender" este layout y rellenar
    solo las secciones variables, como el título o el contenido principal. Esto promueve la reutilización
    del código y facilita el mantenimiento.

    Directivas Clave de Blade Utilizadas:
    - `@yield('section_name')`: Define un marcador de posición. Una vista hija proporcionará el contenido
      para esta sección usando `@section`.
    - `@stack('stack_name')`: Define un punto donde se puede "empujar" o inyectar contenido desde las vistas
      hijas. A diferencia de `@yield`, se pueden hacer múltiples "push" a la misma pila desde diferentes
      lugares, y todo el contenido se concatenará. Es ideal para añadir hojas de estilo o scripts
      específicos de una página sin sobreescribir los de otras.

--}}
<!DOCTYPE html>
{{-- La etiqueta `lang` es importante para la accesibilidad y el SEO. Ayuda a los navegadores y lectores de pantalla a entender el idioma del contenido. --}}
<html lang="es">

    <head>
        {{-- Especifica la codificación de caracteres. UTF-8 es el estándar universal. --}}
        <meta charset="UTF-8">

        {{--
            Asegura que la página se vea bien en todos los dispositivos (responsive design).
            `width=device-width` ajusta el ancho de la página al del dispositivo.
            `initial-scale=1.0` establece el nivel de zoom inicial.
        --}}
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{--
            Directiva @stack('styles'):
            Este es un marcador de posición para una "pila" de estilos.
            Las vistas hijas que extiendan este layout pueden usar `@push('styles')` para insertar
            etiquetas <style> o <link> aquí. Esto es útil para añadir CSS que solo es necesario
            en páginas específicas, manteniendo el layout limpio.
        --}}
        @stack('styles')

        {{--
            Directiva @yield('title'):
            Este es un marcador de posición para el título de la página.
            Cada vista hija que extienda este layout DEBE definir un título usando `@section('title', 'Mi Título')`.
            El contenido de esa sección se insertará aquí, dentro de la etiqueta <title>.
        --}}
        <title>@yield('title')</title>

    </head>

    <body>

        {{-- La etiqueta <main> es semántica. Indica el contenido principal y único del <body>. --}}
        <main>
            {{--
                Directiva @yield('mainContent'):
                Este es el marcador de posición más importante. Aquí es donde se inyectará el contenido
                principal y único de cada página.
                Las vistas hijas definirán este bloque de contenido con `@section('mainContent') ... @endsection`.
            --}}
            @yield('mainContent')
        </main>

    </body>

</html>
