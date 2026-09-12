<head>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body style="background-color: #faf8f6; background-image: radial-gradient(#d8cbcc 1.5px, transparent 1.5px); background-size: 24px 24px;">

    @include('components.navbar')

    <main>
        <div class="form-card">

            <h1>Registro de alumno</h1>
            <div class="divider"></div>

            {{-- Errores de validación --}}
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Nombre --}}
                <div class="form-group full-width" style="margin-bottom: 1.5rem;">
                    <label for="nombre">Nombre(s)</label>

                    <div class="input-wrapper">
                        <input
                            type="text"
                            id="nombre"
                            name="nombre"
                            value="{{ old('nombre') }}"
                            placeholder="Ej. Juan Carlos"
                            required
                        >
                    </div>
                </div>

                {{-- Apellidos --}}
                <div class="form-grid">

                    <div class="form-group">
                        <label for="apellido_paterno">Apellido paterno</label>

                        <div class="input-wrapper">
                            <input
                                type="text"
                                id="apellido_paterno"
                                name="apellido_paterno"
                                value="{{ old('apellido_paterno') }}"
                                placeholder="Ej. Morales"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="apellido_materno">Apellido materno</label>

                        <div class="input-wrapper">
                            <input
                                type="text"
                                id="apellido_materno"
                                name="apellido_materno"
                                value="{{ old('apellido_materno') }}"
                                placeholder="Ej. Segura"
                                required
                            >
                        </div>
                    </div>

                </div>

                {{-- Carrera y semestre --}}
                <div class="form-grid">

                    <div class="form-group">
                        <label for="carrera">Carrera</label>

                        <div class="input-wrapper select-wrapper">
                            <select id="carrera" name="carrera" required>
                                <option value="" disabled {{ old('carrera') ? '' : 'selected' }}>
                                    Selecciona una carrera
                                </option>

                                <option
                                    value="ing_sistemas"
                                    {{ old('carrera') === 'ing_sistemas' ? 'selected' : '' }}
                                >
                                    Ingeniería en Sistemas y Software
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="semestre">Semestre</label>

                        <div class="input-wrapper select-wrapper">
                            <select id="semestre" name="semestre" required>
                                <option value="" disabled {{ old('semestre') ? '' : 'selected' }}>
                                    Selecciona el semestre
                                </option>

                                @for ($i = 1; $i <= 9; $i++)
                                    <option
                                        value="{{ $i }}"
                                        {{ old('semestre') == $i ? 'selected' : '' }}
                                    >
                                        {{ $i == 9 ? 'Noveno semestre o superior' : ['Primer','Segundo','Tercer','Cuarto','Quinto','Sexto','Séptimo','Octavo'][$i-1] . ' semestre' }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Grupo y turno --}}
                <div class="form-grid">

                    <div class="form-group">
                        <label for="grupo">Grupo</label>

                        <div class="input-wrapper">
                            <input
                                type="text"
                                id="grupo"
                                name="grupo"
                                value="{{ old('grupo') }}"
                                placeholder="Ej. 301"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="turno">Turno</label>

                        <div class="input-wrapper select-wrapper">
                            <select id="turno" name="turno" required>
                                <option value="" disabled {{ old('turno') ? '' : 'selected' }}>
                                    Selecciona el turno
                                </option>

                                @foreach ($shifts as $shift)
                                    <option
                                        value="{{ $shift->id }}"
                                        {{ old('turno') == $shift->id ? 'selected' : '' }}
                                    >
                                        {{ $shift->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                {{-- Matrícula y contacto --}}
                <div class="form-grid">

                    <div class="form-group">
                        <label for="matricula">Matrícula</label>

                        <div class="input-wrapper">
                            <input
                                type="text"
                                id="matricula"
                                name="matricula"
                                value="{{ old('matricula') }}"
                                placeholder="Ej. 20241509"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="contacto">Contacto (Teléfono)</label>

                        <div class="input-wrapper">
                            <input
                                type="tel"
                                id="contacto"
                                name="contacto"
                                value="{{ old('contacto') }}"
                                placeholder="Ej. 667 123 4567"
                                required
                            >
                        </div>
                    </div>

                </div>

                {{-- Municipio --}}
                <div class="form-group full-width">
                    <label for="municipio">Municipio</label>

                    <div class="input-wrapper select-wrapper">
                        <select id="municipio" name="municipio" required>
                            <option value="" disabled {{ old('municipio') ? '' : 'selected' }}>
                                Selecciona tu municipio
                            </option>

                            @foreach ($municipalities as $municipality)
                                <option
                                    value="{{ $municipality->id }}"
                                    {{ old('municipio') == $municipality->id ? 'selected' : '' }}
                                >
                                    {{ $municipality->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- Correo --}}
                <div class="form-group full-width" style="margin-top: 0.2rem;">
                    <label for="correo">Correo electrónico institucional</label>

                    <div class="input-wrapper">
                        <input
                            type="email"
                            id="correo"
                            name="correo"
                            value="{{ old('correo') }}"
                            placeholder="Ej. matricula@uadeo.mx"
                            required
                        >
                    </div>
                </div>

                {{-- Contraseña --}}
                <div class="form-grid">

                    <div class="form-group">
                        <label for="password">Contraseña</label>

                        <div class="input-wrapper">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Mínimo 8 caracteres"
                                required
                            >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar contraseña</label>

                        <div class="input-wrapper">
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                placeholder="Repite tu contraseña"
                                required
                            >
                        </div>
                    </div>

                </div>

                <div class="form-footer-divider"></div>

                <div class="form-actions">
                    <button type="button" class="btn btn-cancel">
                        Cancelar
                    </button>

                    <button type="submit" class="btn btn-submit">
                        Registrar
                    </button>
                </div>

            </form>

        </div>
    </main>

</body>