<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Verificar correo - DataCode 2.0</title>
    <link rel="stylesheet" href="{{ asset('css/verify.css') }}">
</head>
<body>

    <div class="verify-card">
        <!-- Icono de sobre / correo épico -->
        <div class="icon-container">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>

        <h1 class="verify-title">Verifica tu correo</h1>

        <p class="verify-desc">
            Te hemos enviado un enlace de verificación especial a tu correo electrónico. Por favor, revísalo para continuar.
        </p>

        @if (session('message'))
            <div class="alert-message">
                {{ session('message') }}
            </div>
        @endif

        <div class="action-forms">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn-primary">
                    Reenviar correo
                </button>
            </form>

            
                <button type="submit" class="btn-secondary">
                   <a href="{{ route('home') }}" style="color: #4a1525;, text-decoration:none;"> Regresar inicio </a>
                </button>
            
        </div>
    </div>

</body>
</html>