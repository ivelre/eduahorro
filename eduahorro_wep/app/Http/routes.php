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
    return view('inicio');
});

Route::get('/caja/educativa', function () {
    return view('public.cajaeducativa');
});

Route::get('/user', 'UserController@webServicesUsers');

Route::get('/user/{id}/grafica', 'UserController@graficaAhorro');
