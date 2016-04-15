<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('inicio');
});

Route::get('/nosotros', function () {
    return view('Nosotros');
});


Route::get('/panel', ['middleware' => 'auth', function () {
    
    return view('panel.inicio');
}]);


Route::get('/menu', function () {
    return view('Menu');
});

Route::get('/contact', function () {
    return view('Contacto');
});


Route::get('/comofunciona', function () {
    return view('ComoFunciona');
});
Route::post('/guardarPedido', [
	'uses' => 'HomeController@guardarPedido'
	]);


