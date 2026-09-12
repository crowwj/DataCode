<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Verificar correo</title>
</head>
<body>

    <h2>Verifica tu correo</h2>

    <p>
        Te enviamos un enlace de verificación a tu correo electrónico.
    </p>

    @if (session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf

        <button type="submit">
            Reenviar correo
        </button>
    </form>

    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <button type="submit">
            Cerrar sesión
        </button>
    </form>

</body>
</html>