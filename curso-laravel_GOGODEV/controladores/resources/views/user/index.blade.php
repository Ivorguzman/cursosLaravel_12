<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Listado de Usuarios: </h1>
    <ul>

        {{-- Directivas selectivas --}}

        @if ($users->isEmpty())
        <p>No hay usuarios registrados con if</p>
        @endif


        {{-- //^ Caso uno: Uso del foreach para recorriddo de la estructura de datos --}}
        {{-- @foreach ($users as $user)
        <li>Nombre:{{ $user->name }}</li>
        <li>Email:{{ $user->email }}</li>
        <li>password:{{ $user->password }}</li>
        <li>age:{{ $user->age }}</li>
        <li>address:{{ $user->address }}</li>
        <li>zip_code:{{ $user->zip_code }}</li>
        <hr>
        @endforeach
        --}}

        {{-- Coso Dos: Uso del foreles() para recorrido de la estructura de datos --}}
        @forelse ($users as $user)
        <li>Nombre:{{ $user->name }}</li>
        <li>Email:{{ $user->email }}</li>
        <li>password:{{ $user->password }}</li>
        <li>age:{{ $user->age }}</li>
        <li>address:{{ $user->address }}</li>
        <li>zip_code:{{ $user->zip_code }}</li>
        <hr>
        @empty
        <p>No hay usuarios registrados con forelse()</p>
        @endforelse

    </ul>
</body>

</html>
