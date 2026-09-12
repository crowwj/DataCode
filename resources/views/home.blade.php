<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <link rel="stylesheet" href="{{ asset('css/console.css') }}"> 
    </head>
    <body style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
        <x-navbar />

            <div class="hero-section">
                <div class="contenido-principal">
                    <div class="mensaje">
                        <div class="convocatoria">
                            <p class="texto">TECNOLOGÍA · CREATIVIDAD · COMUNIDAD</p>
                        </div>
                        <div class="t-tulo">Datacode 2.0</div>
                        <p class="descripci-n">Ideas que se convierten en código. Talento universitario que transforma retos reales en soluciones con impacto.</p>
                        <div class="acciones">
                            <div class="etiqueta-wrapper">
                                <div class="etiqueta-2">  <a href="{{ route('hackaton.hackaton') }}" style="text-decoration:none;"> Quiero participar </a></div>
                            </div>
                            <div class="botn">
                                <div class="etiqueta">Conocer el evento</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="code-editor-card">
                    <div class="editor-topbar">
                        <span class="file-name" id="file-name">PlayerController.gd</span>
                        <span class="language-badge" id="lang-badge">Videojuegos</span>
                    </div>
                    <div class="editor-body" id="editor-body">      
                    </div>
                </div>
            </div>

            <!-- Descripcion de quienes somos  -->
            <div class="quines-somos">
                <div class="encabezado">
                    <div class="div">
                        <div class="indicador"></div>
                        <div class="etiqueta-3">QUIÉNES SOMOS</div>
                    </div>
                    <p class="p">Una comunidad que aprende haciendo.</p>
                </div>
                <div class="historia">
                    <p class="introducci-n">DataCode 2.0 reúne estudiantes de la comunidad de Guamuchil para imaginar nuevas respuestas a los desafíos de nuestro entorno.</p>
                    <div class="detalle">
                        <p class="texto-2">Creamos un espacio abierto para los programadores con la finalidad de fomentar la creatividad y el aprendizaje práctico.</p>
                        <p class="texto-2">Desde la Universidad Autonoma de Occidente Guamuchil impulsamos experiencias que conectan tecnología, colaboración y talento con propósito.</p>
                    </div>
                </div>
            </div>
            <div class="qu-es-un-hackatn">
    <div class="hackathon-timeline">
        <div class="timeline-step">
            <div class="step-number">1</div>
            <div class="step-info">
                <h4>Conecta y Forma Equipo</h4>
                <p>Conoce mentes creativas y arma tu escuadrón multidisciplinario.</p>
            </div>
        </div>
        <div class="timeline-step">
            <div class="step-number">2</div>
            <div class="step-info">
                <h4>Diseña y Prototipa</h4>
                <p>Transforma una idea en código o diseño funcional bajo presión.</p>
            </div>
        </div>
        <div class="timeline-step">
            <div class="step-number">3</div>
            <div class="step-info">
                <h4>Pitch y Gana</h4>
                <p>Presenta tu solución ante el panel y demuestra el impacto.</p>
            </div>
        </div>
    </div>
    <div class="contenido">
        <div class="div">
            <div class="indicador-2"></div>
            <div class="etiqueta-4">QUÉ ES UN HACKATÓN</div>
        </div>
        <p class="t-tulo-2">Un reto intenso. Muchas ideas. Un prototipo real.</p>
        <p class="descripci-n-2">Es un encuentro colaborativo donde equipos multidisciplinarios diseñan y construyen soluciones en tiempo limitado. No necesitas llegar con todas las respuestas: vienes a encontrarlas junto a otros.</p>
        <div class="duracin">
            <div class="dato">
            </div>
        </div>
    </div>
</div>
           
           <div class="objetivos">
    <div class="encabezado-2">
        <div class="ttulo-de-seccin">
            <div class="div">
                <div class="indicador"></div>
                <div class="etiqueta-3">OBJETIVOS</div>
            </div>
            <div class="t-tulo-3">Lo que queremos activar.</div>
        </div>
        
    </div>
    <div class="tarjetas">
        <div class="objetivo">
            <div class="div-2">
                <div class="n-mero">01</div>
                <div class="card-icon-dot"></div>
            </div>
            <div class="contenido-2">
                <div class="nombre">Innovar</div>
                <p class="descripci-n-3">Transformar problemas reales en propuestas útiles y originales.</p>
            </div>
        </div>
        <div class="objetivo">
            <div class="div-2">
                <div class="n-mero">02</div>
                <div class="card-icon-dot"></div>
            </div>
            <div class="contenido-2">
                <div class="nombre">Colaborar</div>
                <p class="descripci-n-3">Conectar talentos diversos para construir mejores soluciones.</p>
            </div>
        </div>
        <div class="objetivo">
            <div class="div-2">
                <div class="n-mero">03</div>
                <div class="card-icon-dot"></div>
            </div>
            <div class="contenido-2">
                <div class="nombre">Aprender</div>
                <p class="descripci-n-3">Desarrollar habilidades técnicas, creativas y humanas.</p>
            </div>
        </div>
    </div>
</div>

            <!-- Footer  -->
            <div class="pie-de-pgina">
                <div class="div-2">
                    <div class="identidad">
                        <div class="marca">DataCode 2.0</div>
                        <p class="universidad">Una iniciativa de la Universidad Autónoma de Occidente Guamuchil · UADEO</p>
                    </div>
                    <div class="columna">
                        <div class="t-tulo-4">REDES SOCIALES</div>
                        <div class="enlace">Instagram</div>
                        <div class="enlace">Facebook</div>
                        <div class="enlace">LinkedIn</div>
                    </div>
                    <div class="columna">
                        <div class="t-tulo-4">CONTÁCTANOS</div>
                        <div class="enlace">@correo</div>
                        <div class="enlace">@numero</div>
                    </div>
                    <div class="columna">
                        <div class="t-tulo-4">INFORMACIÓN</div>
                        <div class="enlace">Talleres</div>
                        <div class="enlace">Comité</div>
                        <div class="enlace">Hackatón</div>
                    </div>
                </div>
                <div class="cierre">
                    <p class="text-wrapper-2">© 2026 DataCode 2.0 · UADEO</p>
                    <div class="text-wrapper-2">Código que conecta ideas.</div>
                </div>
            </div>

        </div>


       <script src="{{ asset('js/console.js') }}"></script> 
    </body>
</html>