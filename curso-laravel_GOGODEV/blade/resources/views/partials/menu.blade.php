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
             <a class="navbar-brand" href="#">Menu</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03"
                 aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="collapse navbar-collapse" id="navbarsExample03">
                 <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                      <li><a class="nav-link active" aria-current="page" href="{{ route('index') }}">Hogar</a> </li>
                             <li><a class="nav-link" href="{{ route('about') }}">Sobre nosotros</a></li>
                             <li><a class="nav-link" href="{{ route('service') }}">Servicios</a></li>
                             <li><a class="nav-link" href="{{ route('contact') }}">Contactos</a></li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown"
                             aria-expanded="false">Menu Alternativo</a>
                         <ul class="dropdown-menu" aria-labelledby="dropdown03">
                             <li><a class="dropdown-item" href="{{ route('about') }}">Nosotros Alternativo</a></li>
                             <li><a class="dropdown-item" href="{{ route('service') }}">Servicios Alternativo</a></li>
                             <li><a class="dropdown-item" href="{{ route('contact') }}">Contactos Alternativo</a></li>
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
