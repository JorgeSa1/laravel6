<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Runner\AfterTestHook;



Route::get('/', 'HomeController@index')->name('site.home');


Route::delete('roteiros/{id}', 'RoteiroController@destroy')->name('roteiros.destroy');
Route::put('roteiros/{id}', 'RoteiroController@update')->name('roteiros.update');
Route::get('roteiros/{id}/edit', 'RoteiroController@edit')->name('roteiros.edit');
Route::get('roteiros/create', 'RoteiroController@create')->name('roteiros.create');
Route::get('roteiros/{id}', 'RoteiroController@show')->name('roteiros.show');
Route::get('/roteiros', 'RoteiroController@index')->name('roteiros.index');
Route::post('roteiros', 'RoteiroController@store')->name('roteiros.store');




Route::get('/pacotes', 'PacoteController@index')->name('site.pacotes');

Route::get('/proximas', 'ProximaViagemController@index')->name('site.proximas');

Route::get('/ultimas', 'UltimaViagemController@index')->name('site.ultimas');

Route::get('/sobre', 'SobreController@index')->name('site.sobre');




Route::get('/contato', function () {
    return view('site.pages.contato.index');
});

Route::get('/registro', function () {
    return view('site.registro');
});

Route::get('/painel', function () {
    return view('admin.dashboard');
});
















/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/