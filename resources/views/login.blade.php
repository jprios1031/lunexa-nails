@extends('plantilla')

@section('titulo', 'Login Admin')

@section('contenido')
<main>
    <div class="login-box" style="max-width:400px; margin:auto;">
        <h2>Login Administrador</h2>

        @if($errors->any())
        <div style="color:red; margin-bottom:15px;">
            {{ $errors->first() }}
        </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Contraseña:</label>
            <input type="password" name="password" required>

            <button type="submit" style="margin-top:10px;">Ingresar</button>
        </form>
    </div>
</main>
@endsection