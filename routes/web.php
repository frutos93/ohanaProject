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
Route::get('/coordinadores', 'CoordinadorController@index')->name('coordinador.index');
Route::get('/coordinadores', 'CoordinadorController@index')->name('coordinadores.index');
Route::get('/coordinadores/store', 'CoordinadorController@create')->name('coordinadores.create');
Route::get('/coordinadores/store', 'CoordinadorController@create')->name('coordinador.create');
Route::post('/coordinadores/update', 'CoordinadorController@update')->name('coordinadores.update');
Route::get('/coordinadores/modify', 'CoordinadorController@modify')->name('coordinadores.modify');
Route::get('/coordinadores/modify', 'CoordinadorController@modify')->name('coordinador.modify');
Route::get('/coordinadores/delete', 'CoordinadorController@delete')->name('coordinadores.delete');
Route::get('/coordinadores/delete', 'CoordinadorController@delete')->name('coordinador.delete');
Route::get('/coordinadores/destroy', 'CoordinadorController@destroy')->name('coordinadores.destroy');
Route::post('/coordinadores', 'CoordinadorController@store')->name('coordinador.store');

// Routas para voluntarios
Route::get('/voluntarios', 'VoluntarioController@index')->name('voluntarios.index');
Route::get('/voluntarios/store', 'VoluntarioController@create')->name('voluntarios.create');
Route::post('/voluntarios/update', 'VoluntarioController@update')->name('voluntarios.update');
Route::get('/voluntarios/modify', 'VoluntarioController@modify')->name('voluntarios.modify');
Route::get('/voluntarios/delete', 'VoluntarioController@delete')->name('voluntarios.delete');
Route::get('/voluntarios/destroy', 'VoluntarioController@destroy')->name('voluntarios.destroy');
Route::post('/voluntarios', 'VoluntarioController@store')->name('voluntarios.store');

// Routas para participantes
Route::get('/participantes', 'ParticipanteController@index')->name('participantes.index');
Route::get('/participantes/store', 'ParticipanteController@create')->name('participantes.create');
Route::post('/participantes/update', 'ParticipanteController@update')->name('participantes.update');;
Route::get('/participantes/modify', 'ParticipanteController@modify')->name('participantes.modify');
Route::get('/participantes/delete', 'ParticipanteController@delete')->name('participantes.delete');
Route::get('/participantes/destroy', 'ParticipanteController@destroy')->name('participantes.destroy');
Route::post('/participantes', 'ParticipanteController@store')->name('participantes.store');

Route::get('/casa_hogar', 'CasaHogarController@index')->name('casa_hogar.index');
Route::get('/casa_hogar/create', 'CasaHogarController@create')->name('casa_hogar.create');
Route::post('/casa_hogar', 'CasaHogarController@store')->name('casa_hogar.store');
Route::get('/casa_hogar/{id}', 'CasaHogarController@show')->name('casa_hogar.show');
Route::get('/casa_hogar/{id}/edit', 'CasaHogarController@edit')->name('casa_hogar.edit');
Route::put('/casa_hogar/{id}', 'CasaHogarController@update')->name('casa_hogar.update');
Route::delete('/casa_hogar/{id}', 'CasaHogarController@destroy')->name('casa_hogar.destroy');

Route::get('/evento', 'EventoController@index')->name('evento.index');
Route::get('/evento/create', 'EventoController@create')->name('evento.create');
Route::post('/evento', 'EventoController@store')->name('evento.store');
Route::get('/evento/{id}', 'EventoController@show')->name('evento.show');
Route::get('/evento/{id}/edit', 'EventoController@edit')->name('evento.edit');
Route::put('/evento/{id}', 'EventoController@update')->name('evento.update');
Route::delete('/evento/{id}', 'EventoController@destroy')->name('evento.destroy');

Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/admin_galeria', 'GaleriaController@index')->name('admin_galeria.index');
Route::get('/admin_galeria/create', 'GaleriaController@create')->name('admin_galeria.create');
Route::post('/admin_galeria', 'GaleriaController@store')->name('admin_galeria.store');
Route::get('/admin_galeria/{id}/edit', 'GaleriaController@edit')->name('admin_galeria.edit');
Route::put('/admin_galeria/{id}', 'GaleriaController@update')->name('admin_galeria.update');


Route::post('/image', 'GaleriaController@uploadImage')->name('image.upload');

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

/*
lo siento rob

Route::get('/coordinador', 'CoordinadorController@index')->name('coordinador.index');
Route::get('/coordinador/create', 'CoordinadorController@create')->name('coordinador.create');
Route::post('/coordinador', 'CoordinadorController@store')->name('coordinador.store');
Route::get('/coordinador/{id}', 'CoordinadorController@show')->name('coordinador.show');
Route::get('/coordinador/{id}/edit', 'CoordinadorController@edit')->name('coordinador.modify');
Route::get('/coordinador/{id}/edit', 'CoordinadorController@edit')->name('coordinador.edit');
Route::put('/coordinador/{id}', 'CoordinadorController@update')->name('coordinador.update');
Route::delete('/coordinador/{id}', 'CoordinadorController@destroy')->name('coordinador.destroy');

Route::get('/participante', 'ParticipanteController@index')->name('participante.index');
Route::get('/participante/create', 'ParticipanteController@create')->name('participante.create');
Route::post('/participante', 'ParticipanteController@store')->name('participante.store');
Route::get('/participante/{id}', 'ParticipanteController@show')->name('participante.show');
Route::get('/participante/{id}/edit', 'ParticipanteController@edit')->name('participante.edit');
Route::put('/participante/{id}', 'ParticipanteController@update')->name('participante.update');
Route::delete('/participante/{id}', 'ParticipanteController@destroy')->name('participante.destroy');

Route::get('/voluntario', 'VoluntarioController@index')->name('voluntario.index');
Route::get('/voluntario/create', 'VoluntarioController@create')->name('voluntario.create');
Route::post('/voluntario', 'VoluntarioController@store')->name('voluntario.store');
Route::get('/voluntario/{id}', 'VoluntarioController@show')->name('voluntario.show');
Route::get('/voluntario/{id}/edit', 'VoluntarioController@edit')->name('voluntario.edit');
Route::put('/voluntario/{id}', 'VoluntarioController@update')->name('voluntario.update');
Route::delete('/voluntario/{id}', 'VoluntarioController@destroy')->name('voluntario.destroy'); 
*/