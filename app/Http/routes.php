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
    return view('Landing');
});

Route::get('/nosotros', function () {
    return view('Nosotros');
});


Route::get('/panel', ['middleware' => 'auth', function () {
    
    return view('panel.inicio');
}]);

Route::get('/historialPedidos', ['middleware' => 'auth', 'uses' => 'HomeController@mostrarPedidos' ]);

Route::get('/productoInsertados', ['middleware' => 'auth', 'uses' => 'HomeController@mostrarProductos' ]);

Route::get('/crearMenu', ['middleware' => 'auth', 'uses' => 'HomeController@crearMenu']);

Route::post('/insertarMenu', ['middleware' => 'auth', 'uses' => 'HomeController@insertarMenu']);

Route::get('/menu', function () {
    return view('Menu');
});

Route::get('/contacto', function () {
    return view('Contacto');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/comoFunciona', function () {
    return view('comoFunciona');
});

Route::get('/ordenExitosa', function () {
    return view('ordenExitosa');
});

Route::get('/formaProducto', function () {
    return view('panel.insertarProducto');
});

Route::any('/guardarPedido', 'HomeController@guardarPedido');

Route::any('/insertarProducto', 'HomeController@insertarProducto');






