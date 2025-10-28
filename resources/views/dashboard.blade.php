@extends('plantilla')

@section('titulo', 'Dashboard de Reservas')

@section('contenido')
<main>
    <div style="max-width:1000px; margin:auto;">

        <!-- Botón de Logout -->
        <div style="text-align:right; margin-bottom:15px;">
            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:#555; color:white; padding:8px 12px; border:none; border-radius:5px;">Cerrar sesión</button>
            </form>
        </div>

        <h2 style="text-align:center; margin-bottom:20px;">Dashboard de Reservas</h2>

        @if(session('success'))
        <div style="color:green; margin-bottom:15px;">{{ session('success') }}</div>
        @endif

        @if($reservas->isEmpty())
        <p>No hay reservas todavía.</p>
        @else
        <table border="1" cellpadding="10" cellspacing="0" style="width:100%; border-collapse:collapse;">
            <thead>
                <tr style="background:#007BFF; color:white;">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Servicio</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->id }}</td>
                    <td>{{ $reserva->nombre }}</td>
                    <td>{{ $reserva->email }}</td>
                    <td>{{ $reserva->telefono }}</td>
                    <td>{{ $reserva->servicio }}</td>
                    <td>{{ $reserva->fecha }}</td>
                    <td>{{ $reserva->hora }}</td>
                    <td>{{ $reserva->estado }}</td>
                    <td>
                        @if($reserva->estado == 'Pendiente')
                        <form action="{{ route('reservas.aprobar', $reserva->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" style="background:green; color:white;">Aprobar</button>
                        </form>
                        <form action="{{ route('reservas.cancelar', $reserva->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" style="background:red; color:white;">Cancelar</button>
                        </form>
                        @else
                        -
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</main>
@endsection