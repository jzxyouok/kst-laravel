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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact_us', 'contactusController@index');

Route::get('/upadevas', 'upadevasController@index');

Route::get('/activities', 'activitiesController@index');

Route::get('/festivals', 'festivalsController@index');

Route::get('/facilities', 'facilitiesController@index');

Route::get('/online_vazhipad', 'onlinevazhipadController@index');

Route::get('/index', 'index_dropController@index');