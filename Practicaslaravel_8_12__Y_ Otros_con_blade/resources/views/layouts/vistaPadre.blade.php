 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <title>        </title>


         <style>
         .bd-placeholder-img {
             font-size: 1.125rem;
             text-anchor: middle;
             -webkit-user-select: none;
             -moz-user-select: none;
             user-select: none;
         }

         @media (min-width: 762px) {
             .bd-placeholder-img-lg {
                 font-size: 3.5rem;
             }
         }
     </style>
</head>
<body>
  @yield('contenidoPrincipal')



    <!--=== Bootstrap nucleo JS  ===-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min5.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
</body>

</html>
