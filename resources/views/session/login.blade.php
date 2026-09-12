<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <title>Data Code 2.0 - Iniciar Sesión</title> 
    @include('components.navbar')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  </head>
  <body>
    <div class="inicio">
      <div class="form-section">
        <form class="form-card" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="title-group">
            <div class="text-wrapper-4">Iniciar sesion</div>
            <p class="p">
              No tienes cuenta? solicita una cuenta a la institucion.
            </p>
          </div>
          <img class="line" src="img/line.svg" alt="Línea divisoria" />

          <div class="workshop-preview">
            <div class="entrada">
              <div class="preview-header">
                <label for="usuario" class="text-wrapper-5">Usuario</label>
              </div>
              <img class="img" src="img/line-3.svg" alt="Línea decorativa" />
              <!-- Textbox para usuario -->
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
                <label for="password" class="text-wrapper-5">Contrasena</label>
              </div>
              <img class="img" src="img/line-4.svg" alt="Línea decorativa" />
              <!-- Textbox para contraseña -->
              <input 
                type="password" 
                id="password" 
                name="password" 
                class="inputbox" 
                placeholder="••••••••"
                required 
              />
            </div>

            <!-- Botón de envío del formulario -->
            <button type="submit" class="btn-view-published">
              <span class="text-wrapper-6">Ingresar</span>
              <span class="icon-caption-arrow">
                <span class="arrow-right">
                  <img class="vector" src="img/image.svg" alt="Flecha" />
                </span>
              </span>
            </button>
          </div>

          <img class="line" src="img/line-2.svg" alt="Línea divisoria" />
        </form>

        <div class="secondary-info">
          <div class="info"></div>
          <p class="tienes-dudas-sobre">
            <span class="span">
              Tienes dudas sobre el funcionamiento de la pagina? dejanos saber por nuestro medio de comunicacion oficial 
            </span>
            <span class="text-wrapper-7">AQUI</span>
            <span class="span"> !</span>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>