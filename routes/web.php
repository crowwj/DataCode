<?php

use Illuminate\Support\Facades\Route;




// VISTAS PUBLICAS 

Route::get('/', function () {
    return view('home');
});

Route::get('/taller', function () {
    return view('taller.taller');
});





//FIN DE VISTAS PUBLICAS


Route::get('/ctaller', function () {
    return view('taller.ctaller');
});