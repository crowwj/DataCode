
<head> 
    <link rel="stylesheet" href="{{ asset('css/pretaller.css') }}">
</head>
@include('components.navbar')
<main style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
        <div class="card-container">
            
            <!-- Opción 1: Unirse a Taller -->
            <div class="section-column column-left">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                    </svg>
                </div>
                
                <span class="section-tag">Unirse a Taller</span>
                <h2 class="section-title">¿Ya tienes el código del taller?</h2>
                
                <div class="input-group">
                    <input type="text" placeholder="Ingresa el código de 6 dígitos" class="text-input">
                </div>
                <a href="{{ route('taller.taller') }}" style="text-decoration: none;">
                <button class="action-button">Unirse a Taller</button>
                </a>
                <p class="helper-text">Obtén el código de tu docente organizador</p>
            </div>

            <!-- Opción 2: Crear Taller (Docente) -->
            <div class="section-column column-right">
                <div class="icon-wrapper">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>

                <span class="section-tag">Crear Taller (Docente)</span>
                <h2 class="section-title">¿Deseas organizar un nuevo taller?</h2>
                
                <div class="spacer-invisible">Espacio</div>

                  <a href="{{ route('taller.ctaller') }}" style="text-decoration: none;">
                <button class="action-button">Crear taller</button>
                </a>

                <p class="helper-text">Requiere inicio de sesión o registro con rol de docente verificado</p>
            </div>

        </div>
    </main>