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
Route::get('thankyou',function(){
    return view('pages.registrationSuccess');
});
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

//routes that only users can access
Route::group(['middleware' => ['auth']], function () {
    //main landing page
    Route::get('landing','LandingController@index');
    
    //list user profiles and search for user profiles
    Route::get('list','ListController@index');
    //view user self profile page
    Route::get('viewProfile','ProfileViewController@index');
    //view others profile page
    Route::get('viewOthers/{id?}','ProfileViewController@show');
    
    //view and update self profile
    Route::get('editProfile','ProfileEditController@index');
    Route::put('editProfile','ProfileEditController@updateSelf');
    
    //change password
    Route::get('changePassword','PasswordChangeController@Index');
    Route::put('changePassword','PasswordChangeController@update');
    
    //user logout
    Route::get('auth/logout',function(){
        Auth::logout();
        return redirect('/');
    });
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
