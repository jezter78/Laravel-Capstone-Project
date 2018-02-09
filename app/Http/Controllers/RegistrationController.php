<?php namespace App\Http\Controllers;

use App\Http\Request;
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
            $validator = $this->validate($request, [
                'firstname' => 'required',
                'lastname' => 'required',
                'gender' => 'required',
                'email' => 'required|unique:users,user_email',
                'password' => 'required',
                'company' => 'required',
                'country' => 'required',
                'city' => 'required',
            ]);
            

            if ($validator->fails())
            {
                return redirect('register')->withErrors($validator);
            } else{        
                $user = new User();
                $user->firstname = $request->input('firstname');
                $user->lastname = $request->input('lastname');
                $user->gender = $request->input('gender');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->company= $request->input('company');
                $user->city = $request->input('city');
                $user->country= $request->input('country');
                $user->status= 'active';
                $user->role = 'user';

                $user->save();
                return redirect('thankyou');
            }
	}


}
