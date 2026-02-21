 {{--
    ==== QUÉ ES ====
    Esto es una "Vista Parcial" (Partial). Es simplemente un trozo de una vista de Blade que se ha extraído
    a su propio archivo para poder ser reutilizado. No tiene ninguna lógica especial por sí mismo.

    ==== CÓMO FUNCIONA ====
    Este archivo es "tonto". Simplemente contiene HTML. La magia ocurre cuando otra vista
    lo llama usando la directiva `@include('partials.menu')`. Al hacerlo, Blade copia y pega
    todo el contenido de este archivo en el lugar donde se hizo el `@include`.

    ==== POR QUÉ SE USA ====
    Para reutilizar fragmentos de UI que aparecen en múltiples páginas, como la navegación, el pie de página,
    una barra lateral, etc. Si necesitas añadir un nuevo enlace al menú, solo editas este archivo
    y el cambio se aplica a todas las páginas que lo incluyan. Mantiene el código limpio y DRY (Don't Repeat Yourself).
--}}




 {{--  nav>ul*4>li{Elemento $} --}}
 {{--  header>(nav>ul>li*4) --}}
 {{--  header>nav>ul>li*4>a[href="#"]  --}}
 <html lang="en">

     <head>

         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">


         <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbars/">



         <!-- Bootstrap nucleo CSS -->
         <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min5.css') }}">

         <style>    
             .bd-placeholder-img {
                 font-size: 1.125rem;
                 text-anchor: middle;
                 -webkit-user-select: none;
                 -moz-user-select: none;
                 user-select: none;
             }

             @media (min-width: 768px) {
                 .bd-placeholder-img-lg {
                     font-size: 3.5rem;
                 }
             }
         </style>


         <!-- Custom styles for this template -->
         <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
     </head>
     <header>
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
             <div class="container-fluid">
                 {{-- <a class="navbar-brand" href="#">Menu</a> --}}
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>

                 <div class="collapse navbar-collapse" id="navbarsExample03">
                     <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                         <li> <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Hogar</a> </li>
                         <li><a class="nav-link" href="{{ route('about') }}">Sobre nosotros</a></li>
                         <li><a class="nav-link" href="{{ route('service') }}">Servicios</a></li>
                         <li><a class="nav-link" href="{{ route('contact') }}">Contactos</a></li>
                         <li class="nav-item dropdown">
                             <a class="nav-link dropdown-toggle" href="#" id="dropdown03"
                                 data-bs-toggle="dropdown" aria-expanded="false">Menu Desplegable</a>
                             <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                 <li><a class="dropdown-item" href="{{ route('about') }}">Nosotros Desplegable</a></li>
                                 <li><a class="dropdown-item" href="{{ route('service') }}">Servicios Desplegable</a>
                                 </li>
                                 <li><a class="dropdown-item" href="{{ route('contact') }}">Contactos Desplegable</a>
                                 </li>
                             </ul>
                         </li>
                     </ul>
                     <form>
                         <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                     </form>
                 </div>
             </div>
         </nav>
     </header>

 </html>
