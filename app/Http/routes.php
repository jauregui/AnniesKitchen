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

Route::get('/', function () {
    return view('Home');
});


Route::get('/nosotros', function () {
    return view('Nosotros');
});


Route::get('/menu', function () {
    return view('Menu');
});


Route::get('/contact', function () {
    return view('Contacto');
});


Route::get('/comofunciona', function () {
    return view('ComoFunciona');
});

