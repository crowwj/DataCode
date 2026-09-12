<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HackathonController extends Controller
{
    public function index(): View
    {
        return view('hackaton.hackaton');
    }
}
