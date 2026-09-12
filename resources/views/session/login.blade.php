<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Data Code 2.0 - Iniciar Sesión</title> 
    @include('components.navbar')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
  <div class="inicio" style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
        <div class="form-section">
            <form class="form-card" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="title-group">
                    <h1 class="text-wrapper-4">Iniciar sesión</h1>
                    <p class="p">
                        ¿No tienes cuenta? Solicita una cuenta a la institución.
                    </p>
                </div>

                <div class="workshop-preview">
                    <div class="entrada">
                        <div class="preview-header">
                            <label for="usuario" class="text-wrapper-5">Usuario</label>
                        </div>
                        <input 
                            type="text" 
                            id="usuario" 
                            name="usuario" 
                            class="inputbox" 
                            placeholder="Ingresa tu usuario"
                            required 
                        />
                    </div>

                    <div class="entrada">
                        <div class="preview-header">
                            <label for="password" class="text-wrapper-5">Contraseña</label>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            class="inputbox" 
                            placeholder="••••••••"
                            required 
                        />
                    </div>

                    <button type="submit" class="btn-view-published">
                        <span class="text-wrapper-6">Ingresar</span>
                        <span class="icon-caption-arrow">
                            <span class="arrow-right">
                                <!-- Flecha SVG limpia inline o puedes usar un icono sencillo -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="vector">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                        </span>
                    </button>
                </div>
            </form>

            <div class="secondary-info">
                <p class="tienes-dudas-sobre">
                    <span class="span">¿Tienes dudas sobre el funcionamiento de la página? Déjanos saber por nuestro medio de comunicación oficial </span>
                    <a href="#" style="text-decoration: none;"><span class="text-wrapper-7">AQUÍ</span></a>
                    <span class="span">!</span>
                </p>
            </div>
        </div>
    </div>
</body>
</html>