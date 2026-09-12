<?php

namespace App\Http\Controllers\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function create(): View
    {
        return view('session.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'usuario' => ['required', 'string'],
            'password' => ['required', 'string'],
        ], [
            'required' => 'El campo :attribute es obligatorio.',
        ], [
            'usuario' => 'usuario',
            'password' => 'contraseña',
        ]);

        $login = $credentials['usuario'];
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'institutional_id';

        if (! Auth::attempt([$field => $login, 'password' => $credentials['password']])) {
            return back()->withErrors([
                'usuario' => 'Las credenciales no coinciden con nuestros registros.',
            ])->onlyInput('usuario');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('profile'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
