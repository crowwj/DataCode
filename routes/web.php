<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Session\LoginController;
use App\Http\Controllers\Session\RegisterController;

// Públicas

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/taller', function () {
    return view('taller.taller');
})->name('taller.taller');

Route::get('/ctaller', function () {
    return view('taller.ctaller');
})->name('taller.ctaller');   

Route::get('/hackaton', function () {
    return view('hackaton.hackaton');
})->name('hackaton.hackaton');

Route::get('/tournament', function () {
    return view('tournament.tournament');
})->name('tournament.tournament');

Route::get('/committee', function () {
    return view('committee.committee');
})->name('comite.comite');

Route::get('/torneoInfo', function () {
    return view('taller.torneoInfo');
})->name('taller.torneoInfo');

Route::get('/tallerinfo', function () {
    return view('taller.tallerinfo');
});


Route::get('/pretaller', function () {
    return view('taller.pretaller');
})->name('taller.pretaller');

// Autenticación

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');

Route::post('/login', [LoginController::class, 'store']);


Route::post('/logout', [LoginController::class, 'destroy'])
    ->name('logout');

    

Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');

Route::post('/register', [RegisterController::class, 'store']);

// Perfil

Route::get('/profile', function () {
    return view('profile.profile');
})->name('profile');