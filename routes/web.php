<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;



// VISTAS PUBLICAS 

Route::get('/', function () {
    return view('home');
});


Route::get('/taller', function () {
    return view('taller.taller');
})->name('taller.taller');


Route::get('/ctaller', function () {
    return view('taller.ctaller');
});

Route::get('/register', function () {
    return view('session.register');
})->name('session.register');


Route::get('/hackaton', function () {
    return view('hackaton.hackaton');
})->name('hackaton.hackaton')->middleware('admin');;

Route::get('/tournament', function () {
    return view('tournament.tournament');
})->name('tournament.tournament');


Route::get('/committee', function () {
    return view('committee.committee');
})->name('comite.comite');

Route::get('/login', function () {
    return view('session.login');
})->name('session.login');

Route::get('/torneoInfo', function () {
    return view('taller.torneoInfo');
})->name('taller.torneoInfo');

//VISTAS PUBLICAS INFORMATICAS

Route::get('/tallerinfo', function () {
    return view('taller.tallerinfo');
});

//FIN DE VISTAS PUBLICAS INFORMATICAS 



//FIN DE VISTAS PUBLICAS





//VISTAS PRIVADAS

Route::get('/profile', function () {
    return view('profile.profile');
});



Route::get('/register', [RegisterController::class, 'create'])->name('register');

Route::post('/register', [RegisterController::class, 'store']);


//FIN DE VISTAS PRIVADAS