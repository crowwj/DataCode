
<head>
     <link rel="stylesheet" href="{{ asset('css/profile.css') }}"> 
</head>
<body>
        @include('components.navbar')


    <!-- Contenido Principal -->
    <main>
        <div class="profile-card">
            <div class="profile-img-container">
              
            </div>

            <!-- Saludo y Bio -->
            <h1>Hola,  <span class="info-value">{{ Auth::user()->name }}</span>
            </h1>
            <p class="profile-bio">Universitari@ integrante de la Universidad Autonoma de Occidente Guamuchil.</p>
        
            <div class="info-box">
                <h2>Ingeniera de software</h2>
                <div class="info-list">
                    <div class="info-item">
                        <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        <span class="info-label">Nombre:</span> 
                        <span class="info-value">{{ Auth::user()->name }}</span>

                    </div>
                    <div class="info-item">
                        <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                        <span class="info-label">Turno:</span><span class="info-value">{{ Auth::user()->turno }}</span>
                    </div>
                    <div class="info-item">
                        <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        <span><span class="info-label">Unidad regional:</span> <span class="info-value">Salvador alvarado</span></span>
                    </div>

                    <div class="info-item">
                        <svg viewBox="0 0 24 24"><path d="M18 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM6 4h5v8l-2.5-1.5L6 12V4zm0 15v-1.5l2.5-1.5L11 17.5V19H6zm12 0h-5v-1.5l2.5-1.5L18 17.5V19zm0-4h-5V4h5v11z"/></svg>
                        <span class="info-label">Semestre:</span>
                        <span class="info-value">{{ Auth::user()->studentProfile->semester }}</span>
                    </div>
                    
                </div>
            </div>

            <!-- Botones de Acción -->
            <div class="profile-actions">
                <a href="#" class="btn btn-primary">
                    Regresar
                    <svg viewBox="0 0 24 24"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/></svg>
                </a>
            </div>
        </div>

        <!-- Nota al pie de página -->
        <div class="footer-note">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
            <p>Tienes dudas sobre el funcionamiento de la pagina? dejanos saber por nuestro medio de comunicacion oficial <a href="#" style="text-decoration:none;"> <span style="color:#5a1827"> Aqui</span> </a></p>
        </div>
    </main>

</body>