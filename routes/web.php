<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Session\LoginController;
use App\Http\Controllers\Session\RegisterController;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
})->middleware(['auth', 'verified'])->name('profile');

Route::get('/email/verify', function () { return view('auth.verify-email'); })->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Se ha enviado un nuevo correo de verificación.');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');