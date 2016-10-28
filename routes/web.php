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
    return view('gallery');
});

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
Route::get('/coordinadores', function () {
    return view('coordinadores');
})->name('coordinadores');

Route::get('/agregarCoordinador', function () {
    return view('agregarCoordinador');

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