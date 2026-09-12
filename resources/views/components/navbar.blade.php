<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="pgina-datacode">
            <div class="barra-de-navegacin">
                <div class="div">
                    <div class="smbolo">
                        <div class="monograma">D</div>
                    </div>
                    <div class="logotipo">DataCode 2.0</div>
                </div>
                <div class="navegacin">
                   <a href="{{ route('taller.taller') }}" style="text-decoration: none;"><div class="text-wrapper">Talleres</div></a>
                   <a href="{{ route('comite.comite') }}" style="text-decoration: none;"><div class="text-wrapper">Comité</div></a>
                   <a href="{{ route('hackaton.hackaton') }}" style="text-decoration: none;"><div class="text-wrapper">Hackatón</div></a>
                   <a href="{{ route('tournament.tournament') }}" style="text-decoration: none;"><div class="text-wrapper">Torneo</div></a>
                    <div class="botn">
                        <div class="etiqueta">Iniciar sesión</div>
                    </div>
                    <div class="etiqueta-wrapper">
                        <div class="etiqueta-2">Registrarse</div>
                    </div>
                </div>
            </div>