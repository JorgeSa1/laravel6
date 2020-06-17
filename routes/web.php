<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Runner\AfterTestHook;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Rotas Públicas

Route::get('/', function () {
    return view('site.home');
});

Route::get('/sobre', function () {
    return view('site.sobre');
});

Route::get('/pacotes', function () {
    return view('site.pacotes');
});

Route::get('/roteiros', function () {
    return view('site.roteiros');
});

Route::get('/ultimas', function () {
    return view('site.ultimas');
});

Route::get('/proximas', function () {
    return view('site.proximas');
});

Route::get('/contato', function () {
    return view('site.contato');
});

Route::get('/registro', function () {
    return view('site.registro');
});


Route::get('/online', function () {
    return view('site.online');
});
















/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/