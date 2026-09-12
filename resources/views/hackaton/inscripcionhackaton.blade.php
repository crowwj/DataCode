<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8" />
    <title>Inscripción Hackatón - DataCode 2.0</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hackatonregistro.css') }}"> 
</head>
<body style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
    <x-navbar />

    <div class="registro-container">
        <div class="encabezado-registro">
            <div class="div">
                <div class="indicador"></div>
                <div class="etiqueta-3">REGISTRO OFICIAL</div>
            </div>
            <h1 class="t-tulo-registro">Inscripción al Hackatón DataCode 2.0</h1>
            <p class="p-registro">Completa tus datos institucionales y acepta los lineamientos para asegurar tu lugar en el evento.</p>
        </div>

        <div class="registro-grid">


            
            <form class="registro-card" action="{{ route('hackaton.store') }}" method="POST">
                @csrf
                <div class="section-title">Datos del Participante</div>
                
                <div class="form-grid-2">
                    <div class="entrada">
                        <label for="nombre" class="text-wrapper-5">Nombre completo</label>
                        <input type="text" id="nombre" name="nombre" class="inputbox" value="{{ Auth::user()->name ?? '' }}" readonly />
                    </div>
                    <div class="entrada">
                        <label for="semestre" class="text-wrapper-5">Semestre</label>
                        <input type="text" id="semestre" name="semestre" class="inputbox" value="{{ Auth::user()->semestre ?? '' }}" required />
                    </div>
                </div>

                <div class="form-grid-2">
                    <div class="entrada">
                        <label for="grupo" class="text-wrapper-5">Grupo</label>
                        <input type="text" id="grupo" name="grupo" class="inputbox" placeholder="Ej. 5-1" required />
                    </div>
                    <div class="entrada">
                        <label for="region" class="text-wrapper-5">Región / Universidad</label>
                        <input type="text" id="region" name="region" class="inputbox" value="UAdeO Guamúchil" readonly />
                    </div>
                </div>

                <!-- Sección de Reglamento -->
                <div class="reglamento-box">
                    <div class="section-title" style="font-size: 16px; margin-bottom: 8px;">Reglamento y Código de Conducta</div>
                    <p class="descripci-n-3" style="margin-bottom: 12px;">Al registrarte te comprometes a mantener un entorno de respeto, colaboración y honestidad académica durante las 24 horas del hackatón.</p>
                    <div class="checkbox-group">
                        <input type="checkbox" id="reglamento" name="reglamento" required />
                        <label for="reglamento" class="text-wrapper-5" style="font-weight: normal; cursor: pointer;">He leído y acepto el reglamento oficial del evento.</label>
                    </div>
                </div>

                <button type="submit" class="btn-submit-hackaton">
                    <span>Completar Inscripción</span>
                </button>
            </form>

            <div class="sidebar-objetivos">
                <div class="encabezado-2" style="margin-bottom: 16px;">
                    <div class="div">
                       
                       
                    </div>
                    <h3 class="t-tulo-3" style="font-size: 20px; margin-top: 6px;">Lo que buscamos lograr</h3>
                </div>

                <div class="tarjetas" style="display: flex; flex-direction: column; gap: 16px;">
                    <div class="objetivo" style="padding: 16px; background: white; border: 1px solid #e2d8c7; border-radius: 12px;">
                        <div class="div-2" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                            <div class="n-mero" style="font-weight: 700; color: #581c26;">01</div>
                            <div class="card-icon-dot"></div>
                        </div>
                        <div class="contenido-2">
                            <div class="nombre" style="font-weight: 600; margin-bottom: 4px;">Innovar</div>
                            <p class="descripci-n-3">Transformar problemas reales en propuestas útiles y originales.</p>
                        </div>
                    </div>

                    <div class="objetivo" style="padding: 16px; background: white; border: 1px solid #e2d8c7; border-radius: 12px;">
                        <div class="div-2" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                            <div class="n-mero" style="font-weight: 700; color: #581c26;">02</div>
                            <div class="card-icon-dot"></div>
                        </div>
                        <div class="contenido-2">
                            <div class="nombre" style="font-weight: 600; margin-bottom: 4px;">Colaborar</div>
                            <p class="descripci-n-3">Conectar talentos diversos para construir mejores soluciones.</p>
                        </div>
                    </div>

                    <div class="objetivo" style="padding: 16px; background: white; border: 1px solid #e2d8c7; border-radius: 12px;">
                        <div class="div-2" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                            <div class="n-mero" style="font-weight: 700; color: #581c26;">03</div>
                            <div class="card-icon-dot"></div>
                        </div>
                        <div class="contenido-2">
                            <div class="nombre" style="font-weight: 600; margin-bottom: 4px;">Aprender</div>
                            <p class="descripci-n-3">Desarrollar habilidades técnicas, creativas y humanas bajo presión.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>