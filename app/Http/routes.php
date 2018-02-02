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

Route::get('registration', function(){
    return view('auth/registration');
});

Route::post('registration', function(){
    echo 'registered';
});

Route::get('login', function(){
    return view('auth/login');
});

Route::post('login', function(){
    echo "login";
});

Route::get('contact', function(){
    return view('pages/contact');
});

Route::post('contact', function(){
    echo 'contact page';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
