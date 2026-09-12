<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta charset="utf-8" />
    <title>Gestión de Equipo - DataCode 2.0</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hackatonregistro.css') }}"> 
</head>
<body style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">
    <x-navbar />

    <div class="registro-container" style="max-width: 800px;">
        <div class="encabezado-registro" style="text-align: center;">
            <div class="div" style="display: flex; justify-content: center;">
               
                <div class="etiqueta-3">ZONA DE ESCUADRONES</div>
            </div>
            <h1 class="t-tulo-registro">Gestión de tu Equipo</h1>
            <p class="p-registro">Forma tu escuadrón para el hackatón o incorpórate a uno mediante un código de invitación.</p>
        </div>

        @if(session('error'))
            <div style="background-color: #fdf8f6; border: 1px solid #ebd3cd; color: #581c26; padding: 12px 16px; border-radius: 12px; margin-bottom: 20px; font-size: 14px;">
                {{ session('error') }}
            </div>
        @endif

        @if(session('success'))
            <div style="background-color: #f4fcf6; border: 1px solid #cdebd3; color: #1c5826; padding: 12px 16px; border-radius: 12px; margin-bottom: 20px; font-size: 14px;">
                {{ session('success') }}
            </div>
        @endif

        @if($team)
            <!-- VISTA: YA TIENE EQUIPO -->
            <div class="registro-card" style="align-items: center; text-align: center; padding: 40px;">
                <div class="section-title" style="font-size: 26px; margin-bottom: 8px;">{{ $team->name }}</div>
                <p class="p-registro">Comparte este código con tus compañeros para que puedan unirse a tu equipo:</p>
                
                <div style="background: #faf6f0; border: 2px dashed #791c26; padding: 16px 32px; border-radius: 12px; font-family: monospace; font-size: 24px; font-weight: bold; color: #791c26; letter-spacing: 2px; margin: 15px 0;">
                    {{ $team->code }}
                </div>

                <div style="width: 100%; text-align: left; margin-top: 25px;">
                    <h3 class="section-title" style="font-size: 16px; margin-bottom: 12px;">Integrantes del equipo:</h3>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 8px; padding: 0;">
                        @foreach($team->members as $member)
                            <li style="background: #faf9f6; padding: 12px 16px; border-radius: 8px; border: 1px solid #e2d8c7; display: flex; justify-content: space-between; align-items: center;">
                                <span style="font-weight: 500; color: #2c1e22;">{{ $member->name }}</span>
                                @if($member->id === $team->user_id)
                                    <span style="font-size: 11px; background: #791c26; color: white; padding: 3px 10px; border-radius: 6px; font-weight: 600; text-transform: uppercase;">Líder</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </div>

                @if(Auth::id() === $team->user_id)
                    <form action="{{ route('hackaton.team.delete') }}" method="POST" style="margin-top: 30px; width: 100%;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: transparent; border: 1px solid #d9534f; color: #d9534f; width: 100%; height: 44px; border-radius: 12px; font-weight: 600; cursor: pointer; transition: 0.2s;" onclick="return confirm('¿Seguro que deseas eliminar el equipo? Todos los integrantes quedarán libres.')">
                            Eliminar equipo y empezar de nuevo
                        </button>
                    </form>
                @endif
            </div>
        @else
            <!-- VISTA: NO TIENE EQUIPO (CREAR O UNIRSE) -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                <!-- Crear Equipo -->
                <form action="{{ route('hackaton.team.create') }}" method="POST" class="registro-card" style="padding: 30px;">
                    @csrf
                    <div class="section-title">Crear un Equipo</div>
                    <p class="p-registro" style="font-size: 13px;">Conviértete en líder y obtén un código único para armar tu escuadra.</p>
                    
                    <div class="entrada" style="margin-top: 15px;">
                        <label for="name" class="text-wrapper-5">Nombre del equipo</label>
                        <input type="text" id="name" name="name" class="inputbox" placeholder="Ej. CyberBytes" required />
                    </div>

                    <button type="submit" class="btn-submit-hackaton" style="margin-top: 20px;">
                        <span>Crear Escuadrón</span>
                    </button>
                </form>

                <!-- Unirse a Equipo -->
                <form action="{{ route('hackaton.team.join') }}" method="POST" class="registro-card" style="padding: 30px;">
                    @csrf
                    <div class="section-title">Unirse a Equipo</div>
                    <p class="p-registro" style="font-size: 13px;">Introduce el código que te proporcionó el líder de tu equipo.</p>
                    
                    <div class="entrada" style="margin-top: 15px;">
                        <label for="code" class="text-wrapper-5">Código de equipo</label>
                        <input type="text" id="code" name="code" class="inputbox" placeholder="Ej. DC2-XXXX" style="text-transform: uppercase;" required />
                    </div>

                    <button type="submit" class="btn-submit-hackaton" style="margin-top: 20px; background-color: #2c1e22;">
                        <span>Unirse al Equipo</span>
                    </button>
                </form>
            </div>
        @endif
    </div>
</body>
</html>