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

Route::get('/', 'HomeController@index');

Route::get('/list', 'HomeController@llistar');

Route::get('test', function() {
	return App\Favor::all();
});

Route::group(['prefix' => 'api'], function() {
	Route::post('favors', 'FavorController@store');
	Route::get('favors/ofertes', 'FavorController@favorsOferts');
	Route::get('favors/demanats', 'FavorController@favorsDemanats');
	Route::get('favors/{id}', 'FavorController@show');
});

Route::group(['prefix' => 'auth'], function() {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
});

Route::group(['prefix' => 'admin'], function() {
    Route::resource('favors', 'AdminController');
});

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
    //
});
