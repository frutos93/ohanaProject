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

Route::get('/voluntarios', function () {
    return view('voluntarios');
})->name('voluntarios');

Route::get('/coordinadores', function () {
    return view('coordinadores');
})->name('coordinadores');


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

Route::resource('agrEvento','EventoController');

// Routas para coordinadores
Route::get('/coordinadores', 'CoordinadorController@index')->name('coordinadores.index');
Route::get('/coordinadores/store', 'CoordinadorController@create')->name('coordinadores.create');
Route::post('/coordinadores/update', 'CoordinadorController@update')->name('coordinadores.update');
Route::get('/coordinadores/modify', 'CoordinadorController@modify')->name('coordinadores.modify');
Route::get('/coordinadores/delete', 'CoordinadorController@delete')->name('coordinadores.delete');
Route::get('/coordinadores/destroy', 'CoordinadorController@destroy')->name('coordinadores.destroy');

// Routas para voluntarios
Route::get('/voluntarios', 'VoluntarioController@index')->name('voluntarios.index');
Route::get('/voluntarios/store', 'VoluntarioController@create')->name('voluntarios.create');
Route::post('/voluntarios/update', 'VoluntarioController@update')->name('voluntarios.update');
Route::get('/voluntarios/modify', 'VoluntarioController@modify')->name('voluntarios.modify');
Route::get('/voluntarios/delete', 'VoluntarioController@delete')->name('voluntarios.delete');
Route::get('/voluntarios/destroy', 'VoluntarioController@destroy')->name('voluntarios.destroy');

// Routas para participantes
Route::get('/participantes', 'ParticipanteController@index')->name('participantes.index');
Route::get('/participantes/store', 'ParticipanteController@create')->name('participantes.create');
Route::post('/participantes/update', 'ParticipanteController@update')->name('participantes.update');;
Route::get('/participantes/modify', 'ParticipanteController@modify')->name('participantes.modify');
Route::get('/participantes/delete', 'ParticipanteController@delete')->name('participantes.delete');
Route::get('/participantes/destroy', 'ParticipanteController@destroy')->name('participantes.destroy');

Route::post('/coordinadores', 'CoordinadorController@store')->name('coordinadores.store');
Route::post('/participantes', 'ParticipanteController@store')->name('participantes.store');
Route::post('/voluntarios', 'VoluntarioController@store')->name('voluntarios.store');

Route::get('contacto',
  ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contacto',
  ['as' => 'contact_store', 'uses' => 'ContactController@store']);
Route::get('test', function()
{
    dd(Config::get('mail'));
});
Route::get('/agregarEvento', 'EventoController@index');
