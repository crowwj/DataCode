
<head>
         <link rel="stylesheet" href="{{ asset('css/tallerinfo.css') }}"> 
 </head>
<body>

     @include('components.navbar')
   
    <main style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
        <div class="info-card">
            <h1>Acerca de los talleres universitarios</h1>
            <p class="subtitle">Conoce el propósito y los beneficios de participar en los talleres formativos de ISOF.</p>
            <div class="divider"></div>

            <div class="content-grid">
               
                <div class="info-box">
                    <h2>
                        <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/></svg>
                        ¿Para qué sirven?
                    </h2>
                    <p> Sirven como espacios prácticos de formación complementaria donde los estudiantes pueden potenciar sus habilidades técnicas, trabajar en equipo y aplicar conocimientos avanzados en proyectos reales fuera del aula tradicional. </p>
                </div>

                
                <div class="info-box">
                    <h2>
                        <svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        Objetivos de los talleres
                    </h2>
                    <p>Fomentar la innovación, el desarrollo de software y la resolución creativa de problemas mediante la mentoría especializada, preparando a los alumnos para retos profesionales y competencias tecnológicas.</p>
                </div>

              
                <div class="info-box full-width">
                    <h2>
                        <svg viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-2 10h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"/></svg>
                        Información general y participación
                    </h2>
                    <p>Están dirigidos a la comunidad estudiantil interesada en la tecnología y el diseño. La participación es abierta bajo cupo limitado, requiriendo un compromiso activo y el seguimiento de las normativas internas de cada laboratorio.</p>
                </div>
            </div>

           
            <div class="form-footer-divider"></div>
            
            <div class="form-actions">
                <a href="#" class="btn btn-outline">Regresar</a>
                <a href="{{ route('taller.pretaller') }}" class="btn btn-primary">
                    Ver talleres disponibles
                    <svg viewBox="0 0 24 24"><path d="M5 13h11.86l-5.43 5.43 1.42 1.42L21.71 12l-7.86-7.86-1.42 1.42L16.86 11H5v2z"/></svg>
                </a>
            </div>
        </div>
    </main>

</body>