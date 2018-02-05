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

Route::get('/', 'IndexController@index');

//Route::get('home', 'HomeController@index');

//User Registration
Route::get('registration','RegistrationController@index');
Route::post('registration','RegistrationController@store');

//User Login
Route::get('auth/login','LoginController@index');
Route::post('auth/login', 'LoginController@authenticate');

//Feedback submission
Route::get('contact', 'FeedbackController@index');
Route::post('contact', 'FeedbackController@create');


Route::group(['middleware' => ['auth']], function () {
    Route::get('landing','LandingController@index');
    
    Route::get('auth/logout',function(){
        Auth::logout();
        return redirect('/');
    });
});
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
