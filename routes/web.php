<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'HomeController@home', 'as' => 'welcome']);

Route::get('/online_vazhipad', 'onlinevazhipadController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact_us', 'contactusController@index')->name('home');
Route::post('contact_us/send', 'contactusController@sendmail');

Route::get('/upadevas', 'upadevasController@index');

Route::get('/activities', 'activitiesController@index');

Route::get('/festivals', 'festivalsController@index');

Route::get('/facilities', 'facilitiesController@index');

Route::get('/online_vazhipad', 'onlinevazhipadController@index');

Route::get('/gallery1', 'galleryController@Gallery1');
Route::get('/gallery2', 'galleryController@gallery2');
Route::get('/gallery3', 'galleryController@gallery3');
Route::get('/gallery4', 'galleryController@gallery4');

Route::get('/online_vazhipad/mojo', 'MojoController@index');
Route::get('/online_vazhipad/mojo/order', 'MojoController@order');
Route::post('/online_vazhipad/mojo/pay', 'MojoController@pay');
Route::get('/online_vazhipad/mojo/thankyou', 'MojoController@thankyou');
Route::get('/online_vazhipad/mojo/webhook', 'MojoController@webhook');