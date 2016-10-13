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



Route::get('/online_vazhipad', 'onlinevazhipadController@index');  

Route::get('/ajax-subcat','onlinevazhipadControlle@ajax');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/contact_us', 'contactusController@index')->name('home');
Route::any('contact_us/send', function() {
	Mail::send('contactus.send', ['name' => 'HARI'], function($message) {
    	$name = $_POST['name']; 
    	$from = $_POST['email'];
     	$message->to('hkk710@gmail.com')->from($from)->subject('Feed Back');
  	});
  	Session::flash('success', 'Your Email was sent successfully. Thankyou for your valuable FeedBack.');
  	return view('contactus.contactus');
});

Route::get('/upadevas', 'upadevasController@index');

Route::get('/activities', 'activitiesController@index');

Route::get('/festivals', 'festivalsController@index');

Route::get('/facilities', 'facilitiesController@index');

Route::get('/online_vazhipad', 'onlinevazhipadController@index');

Route::get('/index', 'index_dropController@index');

Route::get('/gallery1', 'galleryController@Gallery1');
Route::get('/gallery2', 'galleryController@gallery2');
Route::get('/gallery3', 'galleryController@gallery3');
Route::get('/gallery4', 'galleryController@gallery4');
