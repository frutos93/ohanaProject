<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/estadisticas', function () {
    return view('statistics');
});

Route::get('/eventos', function(){
    return view('eventos');
});

Route::get('/participa', function () {
    return view('ParticipaConNosotros');
});

Route::get('/agregarVoluntario', function () {
    return view('agregarVoluntario');
});

Route::get('/agregarParticipante', function () {
    return view('agregarParticipante');
});

Route::get('/coordinadores', function () {
    return view('coordinadores');
})->name('coordinadores');

Route::get('/agregarCoordinador', function () {
    return view('agregarCoordinador');
});

Route::get('/agregarEvento', function () {
    return view('agregarEvento');

});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/about', function()
{
    return view('about');
});

Route::get('/donate', function()
{
    return view('donate');
});

Route::get('/gallery', 'HomeController@gallery');
Route::resource('agrCoord','PostAgrCoordController');
Route::resource('voluntContr','VoluntarioController');
Route::post('something', 'VoluntarioController@method')->name('voluntContr.something');;
Route::resource('participContr','ParticipanteController');
Route::resource('agrEvento','EventoController');
