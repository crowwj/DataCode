<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="{{ asset('css/torneoInfo.css') }}">
</head>
<body>
  <div class="detalle-torneo">
<<<<<<< HEAD
     @include('components.navbar')
=======
    <header class="header">
      <div class="brand">
        <div class="logo">
          <div class="text-wrapper">O</div>
        </div>
        <div class="div">Data Code 2.0</div>
      </div>
      <nav class="navbar">
        <div class="text-wrapper-3">Talleres</div>
        <div class="text-wrapper-3">Docentes</div>
        <div class="text-wrapper-3">Inicio</div>
        <div class="text-wrapper-3">Soporte</div>
      </nav>
      <div class="user-area">
        <div class="text-wrapper-4">Panel académico</div>
        <div class="avatar"></div>
      </div>
    </header>
>>>>>>> 8d98c4b21ae5199903bf60424c5a35716cb3088a

    <div class="content-container">
      <div class="left-column">
        <div class="main-info-card">
          <div class="div-2">
            <div class="status-badge">
              <div class="text-wrapper-5">INSCRIPCIONES ABIERTAS</div>
            </div>
            <p class="p">
              <span class="span">ID del Taller: </span>
              <span class="text-wrapper-6">#PY-2026</span>
            </p>
          </div>

          <div class="div-3">
            <p class="text-wrapper-7">TORNEO DE VIDEOJUEGO SMASH ULTIMATE</p>
            <p class="text-wrapper-8">Coordinado por el departamento de Ingeniería en software</p>
          </div>

          <img class="line" src="img/line-3.svg" />

          <div class="meta-grid">
            <div class="meta-row">
              <div class="detail-item">
                <div class="icon-frame-wrapper">
                  <div class="icon-frame">
                    <img class="vector" src="img/vector-3.svg" />
                  </div>
                </div>
                <p class="div-4">
                  <span class="text-wrapper-9">Encargado:</span>
                  <span class="text-wrapper-10"> Dr. Alejandro Ruiz Mendoza</span>
                </p>
              </div>

              <div class="detail-item">
                <div class="icon-frame-wrapper">
                  <div class="icon-frame">
                    <img class="vector" src="img/image.svg" />
                  </div>
                </div>
                <p class="div-4">
                  <span class="text-wrapper-9">Horario:</span>
                  <span class="text-wrapper-10"> lunes de 16:00 a 18:00</span>
                </p>
              </div>
            </div>

            <div class="meta-row">
              <div class="detail-item">
                <div class="icon-frame-wrapper">
                  <div class="icon-frame">
                    <img class="vector" src="img/vector-2.svg" />
                  </div>
                </div>
                <p class="div-4">
                  <span class="text-wrapper-9">Ubicación:</span>
                  <span class="text-wrapper-10"> Lab. de Cómputo B, Edificio de Posgrado</span>
                </p>
              </div>

              <div class="detail-item">
                <div class="icon-frame-wrapper">
                  <div class="icon-frame">
                    <img class="vector" src="img/vector.svg" />
                  </div>
                </div>
                <p class="div-4">
                  <span class="text-wrapper-9">Cupos totales:</span>
                  <span class="text-wrapper-10"> 64 vacantes disponibles</span>
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="div-5">
          <div class="div-3">
            <div class="text-wrapper-11">Enfoque del torneo</div>
            <p class="text-wrapper-12">
              La idea principal del torneo es motivar a los alumnos a demostrar sus habilidades en modos divertidos y familiares como lo pueden ser los videojuegos en un entorno sano y competitivo.
            </p>
          </div>

          <img class="line" src="img/line.svg" />

          <div class="div-6">
            <div class="text-wrapper-13">Requisitos y Materiales solicitados</div>
            <p class="text-wrapper-12">Un mando personal y un cable si es necesario o se prefiere.</p>
          </div>
        </div>

        <div class="div-5">
          <div class="div-2">
            <div class="title-group">
              <div class="text-wrapper-11">Estudiantes Inscritos</div>
              <p class="p">Mostrando 5 de 64 estudiantes registrados actualmente.</p>
            </div>
            <div class="action">
              <div class="text-wrapper-14">Exportar lista (CSV)</div>
            </div>
          </div>

          <div class="table-header">
            <div class="text-wrapper-15">ESTUDIANTE</div>
            <div class="text-wrapper-16">CARRERA / FACULTAD</div>
            <div class="text-wrapper-17">FECHA REGISTRO</div>
            <div class="text-wrapper-18">ACCIONES</div>
          </div>

          <div class="participant-row">
            <div class="student-info">
              <div class="avatar-2"></div>
              <div class="text-group">
                <div class="text-wrapper-19">Sofía Altamirano</div>
                <div class="text-wrapper-20">sofia.alta@uadeo.mx</div>
              </div>
            </div>
            <div class="text-wrapper-21">Ingeniería de Software</div>
            <div class="text-wrapper-22">14 Feb 2026</div>
            <div class="actions">
              <div class="text-wrapper-14">Gestionar</div>
            </div>
          </div>

          <div class="participant-row">
            <div class="student-info">
              <div class="avatar-3"></div>
              <div class="text-group">
                <div class="text-wrapper-19">Carlos Mendoza</div>
                <div class="text-wrapper-20">carlos.mendoza@uadeo.mx</div>
              </div>
            </div>
            <div class="text-wrapper-21">Ciencias de la Computación</div>
            <div class="text-wrapper-22">13 Feb 2026</div>
            <div class="actions">
              <div class="text-wrapper-14">Gestionar</div>
            </div>
          </div>

          <div class="participant-row">
            <div class="student-info">
              <div class="avatar-4"></div>
              <div class="text-group">
                <div class="text-wrapper-19">Mariana Vega</div>
                <div class="text-wrapper-20">mariana.veg@uadeo.mx</div>
              </div>
            </div>
            <div class="text-wrapper-21">Ingeniería Industrial</div>
            <div class="text-wrapper-22">12 Feb 2026</div>
            <div class="actions">
              <div class="text-wrapper-14">Gestionar</div>
            </div>
          </div>

          <div class="participant-row">
            <div class="student-info">
              <div class="avatar-5"></div>
              <div class="text-group">
                <div class="text-wrapper-19">Diego Martínez</div>
                <div class="text-wrapper-20">diego.mart@uadeo.mx</div>
              </div>
            </div>
            <div class="text-wrapper-21">Sistemas Computacionales</div>
            <div class="text-wrapper-22">10 Feb 2026</div>
            <div class="actions">
              <div class="text-wrapper-14">Gestionar</div>
            </div>
          </div>

          <div class="participant-row">
            <div class="student-info">
              <div class="avatar-6"></div>
              <div class="text-group">
                <div class="text-wrapper-19">Andrea Lozano</div>
                <div class="text-wrapper-20">andrea.loz@uadeo.mx</div>
              </div>
            </div>
            <div class="text-wrapper-21">Física Aplicada</div>
            <div class="text-wrapper-22">09 Feb 2026</div>
            <div class="actions">
              <div class="text-wrapper-14">Gestionar</div>
            </div>
          </div>
        </div>
      </div>

      <div class="right-column">
        <div class="enrollment-status">
          <div class="text-wrapper-23">Inscripciones y Cupo</div>
          <div class="div-6">
            <div class="frame">
              <p class="element-cupos">
                <span class="text-wrapper-24">18 </span>
                <span class="text-wrapper-25">/ 64 cupos</span>
              </p>
              <div class="text-wrapper-26">72% Completo</div>
            </div>
            <div class="progress-bar-track">
              <div class="progress-fill"></div>
            </div>
          </div>

          <img class="line" src="img/line-2.svg" />

          <div class="div-6">
            <div class="frame-2">
              <div class="text-wrapper-27">Lugares disponibles</div>
              <div class="text-wrapper-28">7 vacantes</div>
            </div>
            <div class="frame-2">
              <div class="text-wrapper-27">Total en premios</div>
              <div class="text-wrapper-28">$9999</div>
            </div>
          </div>
        </div>

        <div class="div-7">
          <div class="text-wrapper-23">Gestión Administrativa</div>
          <div class="div-6">
            <div class="btn-edit">
              <div class="caption-edit">
                <div class="vector-wrapper">
                  <img class="img" src="img/vector-4.svg" />
                </div>
              </div>
              <div class="text-wrapper-29">Editar información</div>
            </div>
            <div class="btn-close">
              <div class="text-wrapper-30">Cerrar inscripciones</div>
            </div>
            <div class="btn-cancel">
              <div class="text-wrapper-31">Dar de baja taller</div>
            </div>
          </div>
        </div>

        <div class="div-7">
          <div class="text-wrapper-32">Reglas</div>
          <p class="personajes-base">
            personajes base<br />
            mapas limitados<br />
            no smash<br />
            no items<br />
            limite de tiempo<br />
            no equipos
          </p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>