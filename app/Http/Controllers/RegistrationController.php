<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class RegistrationController extends Controller {

	/**
	 * Display of registration form
	 *
	 * @return view
	 */
	public function index()
	{
            return view('auth/registration');
	}

	/**
	 * Store a newly created user in database
	 *
	 * @return route
	 */
	public function store(Request $request)
	{
            //need validation
            $user = new User();
            $user->user_firstname = $request->input('firstname');
            $user->user_lastname = $request->input('lastname');
            $user->user_gender = $request->input('gender');
            $user->user_email = $request->input('email');
            $user->user_password = Hash::make($request->input('password'));
            $user->user_company= $request->input('company');
            $user->user_city = $request->input('city');
            $user->user_country= $request->input('country');
            $user->user_status= 'active';
            $user->user_role = 'user';
            
            $user->save();
            
            return redirect('thankyou');
	}


}
