<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterStudentRequest;
use App\Models\Municipality;
use App\Models\Role;
use App\Models\Shift;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('session.register', [
            'municipalities' => Municipality::query()->orderBy('name')->orderBy('id')->get(),
            'shifts' => Shift::query()->orderBy('id')->get(),
        ]);
    }

    public function store(RegisterStudentRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $user = DB::transaction(function () use ($data): User {
            $user = User::query()->create([
                'name' => $data['nombre'],
                'first_last_name' => $data['apellido_paterno'],
                'second_last_name' => $data['apellido_materno'],
                'email' => $data['correo'],
                'password' => $data['password'],
                'phone' => $data['contacto'],
                'institutional_id' => $data['matricula'],
                'role_id' => Role::query()->where('name', 'alumno')->firstOrFail()->id,
                'municipality_id' => $data['municipio'],
            ]);

            $user->studentProfile()->create([
                'career' => $data['carrera'],
                'semester' => $data['semestre'],
                'group' => $data['grupo'],
                'shift_id' => $data['turno'],
            ]);

            return $user;
        });

        Auth::login($user);
        $request->session()->regenerate();
        $user->sendEmailVerificationNotification();
        return redirect()->route('profile');
    }
}
