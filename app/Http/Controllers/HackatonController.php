<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HackatonRegistro;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class HackatonController extends Controller
{
    public function create()
    {
        // Verificar si ya está inscrito, si sí, mandarlo directo al panel de su equipo
        $inscrito = HackatonRegistro::where('user_id', Auth::id())->first();
        if ($inscrito) {
            return redirect()->route('hackaton.team');
        }

        return view('hackaton.inscripcionhackaton'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'semestre' => 'required|string',
            'grupo' => 'required|string',
            'reglamento' => 'required',
        ]);

        HackatonRegistro::create([
            'user_id' => Auth::id(),
            'semestre' => $request->semestre,
            'grupo' => $request->grupo,
            'region' => 'UAdeO Guamúchil',
        ]);

        return redirect()->route('hackaton.team');
    }

    public function teamDashboard()
    {
        $user = Auth::user();
        
        $team = Team::with('members', 'owner')->find($user->team_id);
        
        if (!$team) {
           $team = Team::with(['members', 'owner'])->where('user_id', $user->id)->first();
            if ($team) {
                $user->team_id = $team->id;
                $user->save();
            }
        }

        return view('hackaton.team', compact('team'));
    }

    public function createTeam(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:teams,name',
        ]);

        $user = Auth::user();

        // Validar que no tenga equipo previo
        if ($user->team_id) {
            return back()->with('error', 'Ya formas parte de un equipo.');
        }

        // Generar código único (ej: DC2-7X9A)
        $code = 'DC2-' . strtoupper(Str::random(4));

        $team = new Team();
        $team->name = $request->name;
        $team->code = $code;
        $team->user_id = $user->id;
        $team->hackathon_id = 1;
        $team->save();

        // Vincular al creador al equipo
        $user->team_id = $team->id;
        $user->save();

        return redirect()->route('hackaton.team')->with('success', '¡Equipo creado con éxito!');
    }

    public function joinTeam(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        $user = Auth::user();

        if ($user->team_id) {
            return back()->with('error', 'Ya perteneces a un equipo. Sal del actual para unirte a otro.');
        }

        $team = Team::where('code', strtoupper(trim($request->code)))->first();

        if (!$team) {
            return back()->with('error', 'El código de equipo no es válido o no existe.');
        }

        // Vincular usuario al equipo
        $user->team_id = $team->id;
        $user->save();

        return redirect()->route('hackaton.team')->with('success', 'Te has unido al equipo correctamente.');
    }

    public function deleteTeam()
    {
        $user = Auth::user();
        // Corregido de owner_id a user_id para que coincida con tu base de datos
        $team = Team::where('user_id', $user->id)->first();

        if (!$team) {
            return back()->with('error', 'No tienes permisos para eliminar este equipo o no existe.');
        }

        // Desvincular a todos los miembros
        User::where('team_id', $team->id)->update(['team_id' => null]);

        // Eliminar el equipo
        $team->delete();

        return redirect()->route('hackaton.team')->with('success', 'Equipo eliminado. Puedes crear o unirte a uno nuevo.');
    }
}