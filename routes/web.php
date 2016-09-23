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

Route::get('/contact_us', function() {
	return view('contactus/contactus');
});

Route::get('/upadevas', function() {
	return view('prathishtas/prathishtas');
});
Route::get('/activities', function() {
	return view('activities/activities');
});
Route::get('/festivals', function() {
	return view('festivals/festivals');
});
Route::get('/facilities', function() {
	return view('facilities/facilities');
});
Route::get('/online_vazhipad', function() {
	return view('online_vazhipad/online_vazhipad');
});
<<<<<<< HEAD
Route::get('/addtocart', function() {
=======
Route::get('online_vazhipad/addtocart', function() {
>>>>>>> d58fab7c7323e733aa1ef49a2a8951bcf1373ecd
	return view('cart/ajax/addtocart');
});
