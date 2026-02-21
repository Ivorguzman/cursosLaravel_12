    {{-- 
        ==== QUÉ ES ====
    Este es un "Componente Anónimo" de Blade. Es una pieza de UI (Interfaz de Usuario) reutilizable y encapsulada.
    Piensa en él como un bloque de LEGO personalizado que puedes usar en cualquier parte de tu aplicación.
     --}}


    <div class="card"
        style="width: 75rem;  margin-left: auto; margin-right: auto; margin-top: 20px ;  background-color: rgb(197, 221, 226) ;">
        <img src="{{ asset('assets/img/logo.png') }}" width="80" alt="Logo">
        <div class="card-body">
            <h2 style='color: rgb(0, 55, 255)'>{{ $titulo = 'Servicio Premium' }}</h2>
            <h3>{{ $descipcion = ' Acceso exclusivo a tutoriales avanzados y soporte personalizado' }}
                <img src="{{ asset('assets/img/DUJ0V8OZweb_mobile_design.jpg') }}" width=300" alt="cursos">
            </h3>
            <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
    </div>


    <div class="card"
        style="width: 75rem;  margin-left: auto; margin-right: auto; margin-top: 20px ;  background-color: rgb(224, 226, 197) ;">
        <img src="{{ asset('assets/img/logo.png') }}" width="80" alt="Logo">
        <div class="card-body">
            <h2 style='color: rgb(255, 60, 0)'>{{ $titulo = 'Servicio Free' }}</h2>
            <h3>{{ $descipcion = ' Acceso Gratuito a tutoriales.' }}
            </h3>
            <a href="#" class="btn btn-primary">Ir a algún lugar</a>
        </div>
    </div>
