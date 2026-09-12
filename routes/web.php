<?php

use Illuminate\Support\Facades\Route;




// VISTAS PUBLICAS 

Route::get('/', function () {
    return view('home');
});

Route::get('/taller', function () {
    return view('taller.taller');
});

Route::get('/ctaller', function () {
    return view('taller.ctaller');
});

Route::get('/register', function () {
    return view('session.register');
});


Route::get('/hackaton', function () {
    return view('hackaton.hackaton');
});


Route::get('/committee', function () {
    return view('committee.committee');
});

Route::get('/login', function () {
    return view('session.login');
});

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


//FIN DE VISTAS PRIVADAS