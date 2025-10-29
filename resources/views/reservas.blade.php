@extends('plantilla')

@section('titulo', 'Reservas')

@section('contenido')
<main>
    <div class="login-box" style="max-width:500px; margin:auto;">
        <h2>Reserva tu cita</h2>

        @if(session('success'))
        <div style="color:green; margin-bottom:15px;">
            {{ session('success') }}
        </div>
        @endif

        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf
            <label>Nombre:</label>
            <input type="text" name="nombre" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Teléfono:</label>
            <input type="text" name="telefono" required>

            <label>Servicio:</label>
            <select name="servicio" required>
                <option value="Uñas">Uñas</option>
                <option value="Pestañas">Pestañas</option>
                <option value="Cejas">Cejas</option>
            </select>

            <label>Fecha:</label>
<input type="date" name="fecha" min="{{ date('Y-m-d') }}" required>


            <label>Hora:</label>
            <input type="time" name="hora" required>

            <button type="submit" style="margin-top:10px;">Reservar</button>
        </form>

        <!-- Enlace para login del admin -->
        <p style="margin-top:15px; text-align:center;">
            <a href="{{ route('login') }}">Acceder como administrador</a>
        </p>
    </div>
</main>
@endsection
