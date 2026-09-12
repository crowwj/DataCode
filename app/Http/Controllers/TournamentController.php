<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TournamentController extends Controller
{
    public function info(): View
    {
        return view('taller.torneoInfo');
    }
}
