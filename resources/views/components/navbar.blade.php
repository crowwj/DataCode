<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<div class="pgina-datacode">
    <div class="barra-de-navegacin">
        <div class="div">
            <div class="smbolo">
                <div class="monograma">D</div>
            </div>
            <div class="logotipo">
                  <a href="{{ route('home') }}" style="color: #4a1525;, text-decoration:none;">  DataCode 2.0 </a>

            </div>
        </div>
        <div class="navegacin">

            <a href="{{ route('taller.pretaller') }}" style="text-decoration: none;">
                <div class="text-wrapper">Talleres</div>
            </a>

            <a href="{{ route('comite.comite') }}" style="text-decoration: none;">
                <div class="text-wrapper">Comité</div>
            </a>

            <a href="{{ route('hackaton.hackaton') }}" style="text-decoration: none;">
                <div class="text-wrapper">Hackatón</div>
            </a>

            <a href="{{ route('tournament.tournament') }}" style="text-decoration: none;">
                <div class="text-wrapper">Torneo</div>
            </a>

            @if (Auth::check())

                <a href="{{ route('profile') }}" style="text-decoration: none;">
                    <div class="botn">
                        <div class="etiqueta">Perfil</div>
                    </div>
                </a>

                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="etiqueta-wrapper" style="border: none;">
                        <div class="etiqueta-2">Salir</div>
                    </button>
                </form>

            @else

                <a href="{{ route('login') }}" style="text-decoration: none;">
                    <div class="botn">
                        <div class="etiqueta">Iniciar sesión</div>
                    </div>
                </a>

                <a href="{{ route('register') }}" style="text-decoration: none;">
                    <div class="etiqueta-wrapper">
                        <div class="etiqueta-2">Registrarse</div>
                    </div>
                </a>

            @endif

        </div>
    </div>
</div>
