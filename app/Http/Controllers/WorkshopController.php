<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class WorkshopController extends Controller
{
    public function index(): View
    {
        return view('taller.taller');
    }

    public function create(): View
    {
        return view('taller.ctaller');
    }

    public function info(): View
    {
        return view('taller.tallerinfo');
    }
}
