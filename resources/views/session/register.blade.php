
<head> 
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
   
     @include('components.navbar')

    <!-- Contenido Principal -->
    <main>
        <div class="form-card">
            <h1>Registro de alumno</h1>
            <div class="divider"></div>

            <form action="/register" method="POST">
                @csf
                <div class="form-group full-width" style="margin-bottom: 1.5rem;">
                    <label for="nombre">Nombre(s)</label>
                    <div class="input-wrapper">
                       <!-- Fijar imagen de personas --> 
                        <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Carlos" required>
                    </div>
                </div>

                <!-- Apellidos: Paterno y Materno -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido paterno</label>
                        <div class="input-wrapper">
                            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                            <input type="text" id="apellido_paterno" name="apellido_paterno" placeholder="Ej. Morales" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido_materno">Apellido materno</label>
                        <div class="input-wrapper">
                            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                            <input type="text" id="apellido_materno" name="apellido_materno" placeholder="Ej. Segura" required>
                        </div>
                    </div>
                </div>

                <!-- Carrera y Semestre -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="carrera">Carrera</label>
                        <div class="input-wrapper select-wrapper">
                            <svg viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/></svg>
                            <select id="carrera" name="carrera" required>
                                <option value="" disabled selected>Selecciona una carrera</option>
                                <option value="ing_sistemas">Ingeniería en Sistemas y Software</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="semestre">Semestre</label>
                        <div class="input-wrapper select-wrapper">
                            <svg viewBox="0 0 24 24"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11zM7 10h5v5H7z"/></svg>
                            <select id="semestre" name="semestre" required>
                                <option value="" disabled selected>Selecciona el semestre</option>
                                <option value="1">Primer semestre</option>
                                <option value="2">Segundo semestre</option>
                                <option value="3">Tercer semestre</option>
                                <option value="4">Cuarto semestre</option>
                                <option value="5">Quinto semestre</option>
                                <option value="6">Sexto semestre</option>
                                <option value="7">Séptimo semestre</option>
                                <option value="8">Octavo semestre</option>
                                <option value="9">Noveno semestre o superior</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Matrícula y Contacto -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <div class="input-wrapper">
                            <!-- Icono de Identificación / Tarjeta -->
                            <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V6h16v12zM6 10h2v2H6zm0 4h8v2H6zm4-4h8v2h-8z"/></svg>
                            <input type="text" id="matricula" name="matricula" placeholder="Ej. 20241509" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contacto">Contacto (Teléfono)</label>
                        <div class="input-wrapper">
                            <!-- Icono de Teléfono -->
                            <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
                            <input type="tel" id="contacto" name="contacto" placeholder="Ej. 667 123 4567" required>
                        </div>
                    </div>
                </div>

                <!-- Correo -->
                <div class="form-group full-width" style="margin-top: 0.2rem;">
                    <label for="correo">Correo electrónico institucional</label>
                    <div class="input-wrapper">
                        <!-- Icono de Correo -->
                        <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                        <input type="email" id="correo" name="correo" placeholder="Ej. matricula@uadeo.mx" required>
                    </div>
                </div>

                <div class="form-footer-divider"></div>
                
                <div class="form-actions">
                    <button type="button" class="btn btn-cancel">Cancelar</button>
                    <button type="submit" class="btn btn-submit">
                        Registrar                       
                    </button>
                </div>
            </form>
        </div>
    </main>

</body>