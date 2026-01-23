
{{--
    ==== QUÉ ES ====
    Este es un "Componente Anónimo" de Blade. Es una pieza de UI (Interfaz de Usuario) reutilizable y encapsulada.
    Piensa en él como un bloque de LEGO personalizado que puedes usar en cualquier parte de tu aplicación.
    El nombre del archivo (`page-header.blade.php`) se traduce a una etiqueta <x-page-header>.

    ==== CÓMO FUNCIONA ====
    Cuando usas la etiqueta <x-page-header title="Mi Título"> en otra vista, Blade busca este archivo.
    Los atributos de la etiqueta (como `title`) se convierten en variables PHP disponibles dentro de este archivo (como `$title`).
    El contenido que pones DENTRO de la etiqueta (<x-page-header>AQUÍ</x-page-header>) se inyecta en la variable `$slot`.

    ==== POR QUÉ SE USA ====
    Para no repetir código (principio DRY). Si necesitas cambiar el diseño del encabezado de todas las páginas,
    solo modificas este archivo, y el cambio se reflejará en todos los lugares donde se use el componente.
    Hace que las vistas sean más limpias y legibles.
--}}


{{--
    `@props` es una directiva de Blade que se usa para definir explícitamente los "atributos" o "propiedades" (props)
    que este componente espera recibir. Es una buena práctica para la claridad del código.
    Aquí, le decimos a Blade que este componente espera recibir un atributo llamado `title`.
    Cualquier otro atributo (como `class`, `id`, etc.) será almacenado en una variable especial llamada `$attributes`.
--}}
@props(['title'])


{{--
    `<header>` es una etiqueta semántica de HTML5 que representa un contenedor para contenido introductorio o un conjunto de ayudas a la navegación.
    `class="..."` es un atributo HTML para aplicar estilos CSS. Usamos clases de Bootstrap para el estilo.
        - `bg-light`: Fondo gris claro.
        - `p-3`: Padding (relleno interior) en todos los lados.
        - `mb-4`: Margin-bottom (margen inferior) para separarlo del contenido que sigue.
        - `border`: Añade un borde sutil.
--}}
<header class="bg-light p-3 mb-4 border rounded-3">

    {{--
        `<h1>` es la etiqueta para el encabezado más importante de una sección.
        `{{ $title }}`: Las dobles llaves `{{ ... }}` son la sintaxis de Blade para imprimir una variable de forma segura.
        Blade automáticamente escapa el contenido para prevenir ataques XSS (Cross-Site Scripting).
        `$title` es la variable que contiene el valor que pasamos al atributo `title` en la etiqueta <x-page-header>.
    --}}
    <h1 style='color: red' >{{ $title }}</h1>


    {{--
        `{{ $slot }}` es una variable especial en los componentes de Blade.
        Contiene todo el HTML que se haya colocado ENTRE las etiquetas de apertura y cierre del componente.
        Ejemplo: <x-page-header title="Hola">AQUÍ VA EL CONTENIDO DEL SLOT</x-page-header>
        Es útil para pasar bloques de HTML más complejos al componente.
    --}}
    <div class="subtitle">
        {{ $slot }}
    </div>

</header>
