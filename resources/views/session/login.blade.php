<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">

   @include('components.navbar')

    <div class="form-section">
      <div class="form-card">
        <div class="title-group">
          <div class="text-wrapper-4">Iniciar sesion</div>
          <p class="p">No tienes cuenta? solicita una cuenta a la institucion.</p>
        </div>

        <img class="line" src="img/line.svg" />

        <div class="workshop-preview">
          <!-- Entrada: Usuario -->
          <div class="entrada">
            <div class="preview-header">
              <label for="usuario" class="text-wrapper-5">Usuario</label>
            </div>
            <img class="img" src="img/line-3.svg" />
            <input type="text" id="usuario" name="usuario" class="inputbox" placeholder="Ingresa tu usuario" autocomplete="username" />
          </div>

          <!-- Entrada: Contraseña -->
          <div class="entrada">
            <div class="preview-header">
              <label for="password" class="text-wrapper-5">Contraseña</label>
            </div>
            <img class="img" src="img/line-4.svg" />
            <input type="password" id="password" name="password" class="inputbox" placeholder="Ingresa tu contraseña" autocomplete="current-password" />
          </div>

          <button type="submit" class="btn-view-published">
            <span class="text-wrapper-6">Ingresar</span>
            <div class="icon-caption-arrow">
              <div class="arrow-right">
                <img class="vector" src="img/image.svg" alt="flecha" />
              </div>
            </div>
          </button>
        </div>

        <img class="line" src="img/line-2.svg" />
      </div>

      <div class="secondary-info">
        <div class="info"></div>
        <p class="tienes-dudas-sobre">
          <span class="span">Tienes dudas sobre el funcionamiento de la pagina? dejanos saber por nuestro medio de comunicacion oficial </span>
          <span class="text-wrapper-7">AQUI</span>
          <span class="span"> !</span>
        </p>
      </div>
    </div>
  </div>
</body>
</html>