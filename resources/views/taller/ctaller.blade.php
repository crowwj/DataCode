<head> 
   <link rel="stylesheet" href="{{ asset('css/taller.css') }}">
</head>

    @include('components.navbar')
  
    <main>
        <div class="form-card">
            <h1>Crear taller universitario</h1>
            <div class="divider"></div>

            <form>
               
                <div class="form-group full-width" style="margin-bottom: 1.5rem;">
                    <label for="nombre-taller">Nombre del taller</label>
                    <div class="input-wrapper">
                        <svg viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
                        <input type="text" id="nombre-taller" placeholder="Ej. Taller de Python para estudiantes de pregrado">
                    </div>
                </div>

                <!-- Encargado y Cupos -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="encargado">Encargado</label>
                        <div class="input-wrapper">
                            <!-- Icono de Usuario -->
                            <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                            <input type="text" id="encargado" placeholder="Ej. Nombre del profesor o coordinador">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cupos">Cupos</label>
                        <div class="input-wrapper">
                            <!-- Icono de Grupo -->
                            <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                            <input type="text" id="cupos" placeholder="Número de participantes (Ej. 12)">
                        </div>
                    </div>
                </div>

                <!-- Horario y Ubicación -->
                <div class="form-grid">
                    <div class="form-group">
                        <label for="horario">Horario</label>
                        <div class="input-wrapper">
                            <!-- Icono de Reloj -->
                            <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                            <input type="text" id="horario" placeholder="Ej. Martes de 16:00 a 18:00">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicación</label>
                        <div class="input-wrapper">
                            <!-- Icono de Ubicación/Pin -->
                            <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                            <input type="text" id="ubicacion" placeholder="Aula, edificio, campus o enlace virtual">
                        </div>
                    </div>
                </div>

                <!-- Propuesta -->
                <div class="form-group full-width" style="margin-bottom: 1.5rem;">
                    <label for="propuesta">Propuesta</label>
                    <textarea id="propuesta" placeholder="Describe brevemente el enfoque del taller, los temas que se abordarán y qué podrán aplicar los estudiantes al finalizar."></textarea>
                </div>

                <!-- Materiales -->
                <div class="form-group full-width">
                    <label for="materiales">Materiales</label>
                    <textarea id="materiales" placeholder="Ej. Computadora con acceso a internet, editor de código y cuenta de GitHub. Se recomienda traer auriculares y cuaderno."></textarea>
                </div>

                <!-- Divider & Acciones -->
                <div class="form-footer-divider"></div>
                
                <div class="form-actions">
                    <button type="button" class="btn btn-cancel">Cancelar</button>
                    <button type="submit" class="btn btn-submit">
                        Crear taller
                       
                    </button>
                </div>
            </form>
        </div>
    </main>