<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	
	Route::auth();
	Route::get('/',function(){
			return view('newhome');
	});
    // Route::get('/','pages@home');
    Route::get('/home', 'pages@home');
    
	Route::get('/user/profile','ProfileController@index');
	
    Route::get('user/tengeneza','userController@ongeza');
	Route::post('user/Create','userController@store');
	//Route::post('self/SignIn','userController@login');

	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@logout');
	Route::post('user/profile/update','ProfileController@update');
	Route::get('/user/profile/edit/{id}', [
    	'middleware' => 'auth', 
    	'uses' => 'ProfileController@edit']);

	//
});
