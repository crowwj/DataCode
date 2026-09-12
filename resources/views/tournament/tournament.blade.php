<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Detalle del Torneo - DataCode</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hackatonregistro.css') }}">
    
</head>
<body style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
    <x-navbar/>

    <div class="registro-container" style="max-width: 1200px;">
        <div class="encabezado-registro" style="text-align: center; margin-bottom: 30px;">
            <div class="div" style="display: flex; justify-content: center;">
                <div class="indicador"></div>
                
            </div>
            <h1 class="t-tulo-registro">Torneo de Videojuego Smash Ultimate</h1>
            <p class="p-registro">Coordinado por el departamento de Ingeniería en Software</p>
        </div>

        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 24px; align-items: start;">
            
            <!-- COLUMNA IZQUIERDA: Información Principal y Tabla -->
            <div style="display: flex; flex-direction: column; gap: 24px;">
                
                <!-- Tarjeta de Detalles del Evento -->
                <div class="registro-card" style="padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <span style="font-size: 11px; background: #791c26; color: white; padding: 4px 12px; border-radius: 6px; font-weight: 600; text-transform: uppercase;">Inscripciones Abiertas</span>
                        <span style="font-family: monospace; font-size: 14px; font-weight: bold; color: #791c26;">ID: #PY-2026</span>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 25px;">
                        <div style="background: #faf9f6; padding: 14px; border-radius: 10px; border: 1px solid #e2d8c7;">
                            <span style="font-size: 12px; color: #7c6c70; display: block; font-weight: 500;">Encargado</span>
                            <span style="font-size: 14px; font-weight: 600; color: #2c1e22;">Dr. Alejandro Ruiz Mendoza</span>
                        </div>
                        <div style="background: #faf9f6; padding: 14px; border-radius: 10px; border: 1px solid #e2d8c7;">
                            <span style="font-size: 12px; color: #7c6c70; display: block; font-weight: 500;">Horario</span>
                            <span style="font-size: 14px; font-weight: 600; color: #2c1e22;">Lunes de 16:00 a 18:00 hrs</span>
                        </div>
                        <div style="background: #faf9f6; padding: 14px; border-radius: 10px; border: 1px solid #e2d8c7;">
                            <span style="font-size: 12px; color: #7c6c70; display: block; font-weight: 500;">Ubicación</span>
                            <span style="font-size: 14px; font-weight: 600; color: #2c1e22;">Lab. B, Edificio de Posgrado</span>
                        </div>
                        <div style="background: #faf9f6; padding: 14px; border-radius: 10px; border: 1px solid #e2d8c7;">
                            <span style="font-size: 12px; color: #7c6c70; display: block; font-weight: 500;">Cupos Totales</span>
                            <span style="font-size: 14px; font-weight: 600; color: #2c1e22;">64 vacantes disponibles</span>
                        </div>
                    </div>

                    <div style="border-top: 1px solid #e2d8c7; padding-top: 20px; margin-top: 10px;">
                        <h3 class="section-title" style="font-size: 16px; margin-bottom: 8px;">Enfoque del torneo</h3>
                        <p class="p-registro" style="font-size: 14px; margin-bottom: 16px;">
                            La idea principal del torneo es motivar a los alumnos a demostrar sus habilidades en modos divertidos y familiares como lo pueden ser los videojuegos en un entorno sano y competitivo.
                        </p>

                        <h3 class="section-title" style="font-size: 16px; margin-bottom: 8px;">Requisitos y Materiales solicitados</h3>
                        <p class="p-registro" style="font-size: 14px;">Un mando personal y un cable si es necesario o se prefiere.</p>
                    </div>
                </div>

                <!-- Tarjeta de Participantes Inscritos -->
                <div class="registro-card" style="padding: 30px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <div>
                            <div class="section-title" style="font-size: 20px; margin-bottom: 4px;">Estudiantes Inscritos</div>
                            <p class="p-registro" style="font-size: 13px; margin: 0;">Mostrando registros actuales en sistema.</p>
                        </div>
                        <button type="button" style="background: #faf6f0; border: 1px solid #791c26; color: #791c26; padding: 8px 16px; border-radius: 8px; font-weight: 600; font-size: 13px; cursor: pointer;">
                            Exportar inscripcion (CSV)
                        </button>
                    </div>

                    <div style="overflow-x: auto;">
                        <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px;">
                            <thead>
                                <tr style="border-bottom: 2px solid #e2d8c7; color: #7c6c70; font-size: 12px; font-weight: 600; letter-spacing: 0.5px;">
                                    <th style="padding-bottom: 12px;">ESTUDIANTE</th>
                                    <th style="padding-bottom: 12px;">SEMESTRE</th>
                                    <th style="padding-bottom: 12px;">REGISTRO</th>
                                    <th style="padding-bottom: 12px; text-align: right;">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody style="color: #2c1e22;">
                                <tr style="border-bottom: 1px solid #f0eae1;">
                                    <td style="padding: 12px 0; font-weight: 500;">Sofía Altamirano<br><span style="font-size: 12px; color: #7c6c70; font-weight: normal;">sofia.alta@uadeo.mx</span></td>
                                    <td style="padding: 12px 0;">2</td>
                                    <td style="padding: 12px 0; color: #7c6c70;">14 Feb 2026</td>
                                    <td style="padding: 12px 0; text-align: right;"><a href="#" style="color: #791c26; font-weight: 600; text-decoration: none;">Gestionar</a></td>
                                </tr>
                                <tr style="border-bottom: 1px solid #f0eae1;">
                                    <td style="padding: 12px 0; font-weight: 500;">Carlos Mendoza<br><span style="font-size: 12px; color: #7c6c70; font-weight: normal;">carlos.mendoza@uadeo.mx</span></td>
                                    <td style="padding: 12px 0;">4</td>
                                    <td style="padding: 12px 0; color: #7c6c70;">13 Feb 2026</td>
                                    <td style="padding: 12px 0; text-align: right;"><a href="#" style="color: #791c26; font-weight: 600; text-decoration: none;">Gestionar</a></td>
                                </tr>
                                <tr style="border-bottom: 1px solid #f0eae1;">
                                    <td style="padding: 12px 0; font-weight: 500;">Mariana Vega<br><span style="font-size: 12px; color: #7c6c70; font-weight: normal;">mariana.veg@uadeo.mx</span></td>
                                    <td style="padding: 12px 0;">3</td>
                                    <td style="padding: 12px 0; color: #7c6c70;">12 Feb 2026</td>
                                    <td style="padding: 12px 0; text-align: right;"><a href="#" style="color: #791c26; font-weight: 600; text-decoration: none;">Gestionar</a></td>
                                </tr>
                                <tr style="border-bottom: 1px solid #f0eae1;">
                                    <td style="padding: 12px 0; font-weight: 500;">Diego Martínez<br><span style="font-size: 12px; color: #7c6c70; font-weight: normal;">diego.mart@uadeo.mx</span></td>
                                    <td style="padding: 12px 0;">5</td>
                                    <td style="padding: 12px 0; color: #7c6c70;">10 Feb 2026</td>
                                    <td style="padding: 12px 0; text-align: right;"><a href="#" style="color: #791c26; font-weight: 600; text-decoration: none;">Gestionar</a></td>
                                </tr>
                                <tr>
                                    <td style="padding: 12px 0; font-weight: 500;">Andrea Lozano<br><span style="font-size: 12px; color: #7c6c70; font-weight: normal;">andrea.loz@uadeo.mx</span></td>
                                    <td style="padding: 12px 0;">6</td>
                                    <td style="padding: 12px 0; color: #7c6c70;">09 Feb 2026</td>
                                    <td style="padding: 12px 0; text-align: right;"><a href="#" style="color: #791c26; font-weight: 600; text-decoration: none;">Gestionar</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <!-- COLUMNA DERECHA: Estado, Gestión y Reglas -->
            <div style="display: flex; flex-direction: column; gap: 24px; ">
                
                <!-- Progreso de Cupos -->
                <div class="registro-card" style="padding: 24px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <div class="section-title" style="font-size: 18px; margin-bottom: 12px;">Inscripciones y Cupo</div>
                    <div style="display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px;">
                        <div>
                            <span style="font-size: 28px; font-weight: bold; color: #791c26;">18</span>
                            <span style="font-size: 14px; color: #7c6c70;">/ 64 cupos</span>
                        </div>
                        <span style="font-size: 13px; font-weight: 600; color: #1c5826; background: #f4fcf6; padding: 2px 8px; border-radius: 4px;">72% Completo</span>
                    </div>
                    <div style="background: #e2d8c7; border-radius: 8px; height: 8px; width: 100%; overflow: hidden; margin-bottom: 16px;">
                        <div style="background: #791c26; height: 100%; width: 72%;"></div>
                    </div>
                    <div style="display: flex; justify-content: space-between; font-size: 13px; color: #7c6c70; border-top: 1px solid #e2d8c7; padding-top: 12px;">
                        <span>Lugares disponibles: <strong style="color: #2c1e22;">7 vacantes</strong></span>
                        <span>Premios: <strong style="color: #2c1e22;">$9,999</strong></span>
                    </div>
                </div>

                <!-- Panel de Administración -->
                <div class="registro-card" style="padding: 24px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); ">
                    <div class="section-title" style="font-size: 18px; margin-bottom: 16px;">Gestión Administrativa</div>
                    <div style="display: flex; flex-direction: column; gap: 10px;">
                        <button type="button" style="background: #faf6f0; border: 1px solid #e2d8c7; color: #2c1e22; padding: 10px; border-radius: 8px; font-weight: 600; font-size: 13px; cursor: pointer; text-align: left; display: flex; align-items: center; gap: 8px;">
                            ✏️ Editar información
                        </button>
                        <button type="button" style="background: #faf6f0; border: 1px solid #e2d8c7; color: #2c1e22; padding: 10px; border-radius: 8px; font-weight: 600; font-size: 13px; cursor: pointer; text-align: left; display: flex; align-items: center; gap: 8px;">
                            🔒 Cerrar inscripciones
                        </button>
                        <button type="button" style="background: transparent;  padding: 10px; border-radius: 8px; font-weight: 600; font-size: 13px; cursor: pointer; text-align: left; display: flex; align-items: center; gap: 8px;" onclick="return confirm('¿Estás seguro de dar de baja este taller?')">
                            ⚠️ Dar de baja taller
                        </button>
                    </div>
                </div>

                <!-- Reglas del Torneo -->
                <div class="registro-card" style="padding: 24px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);">
                    <div class="section-title" style="font-size: 18px; margin-bottom: 12px; ">Reglamento del torneo</div>
                    <ul style="margin: 0; padding-left: 20px; font-size: 14px; color: #2c1e22; display: flex; flex-direction: column; gap: 6px;">
                        <li>No lloros</li>
                        <li>Mapas limitados</li>
                        <li>No smash final</li>
                        <li>No noobs</li>
                        <li>Límite de tiempo</li>
                        <li>No equipos</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</body>
</html>