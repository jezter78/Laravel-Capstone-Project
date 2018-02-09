<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            return view('auth/login');
	}
        
        /**
         * Handle an authentication attempt.
         *
         * @return Response
         */
        public function authenticate(Request $request)
        {
            //need validation
            if (Auth::attempt(['email' => $request['email'], 
                'password' => $request->input('password'), 'status' => 'active'])) {
                // Authentication passed...
                return redirect('landing');
            } else {
                return redirect('auth/login')->with('status','Email or password Incorrect');
            }
        }
}
