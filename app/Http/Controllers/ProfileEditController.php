<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileEditController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $user = Auth::user();
            return view('pages/editProfile',compact('user'));
	}
        /**
         * Update self profile
         * 
         * @param Request $request
         * @return Response
         */
        public function updateSelf(Request $request){
            $user = Auth::user();

            $user -> user_firstname = $request -> input('firstname');
            $user -> user_lastname = $request -> input('lastname');
            $user -> user_company = $request -> input('company');
            $user -> user_country = $request -> input('country');
            $user -> user_city = $request -> input('city');
            $user -> user_email = $request -> input('email');
            
            $user -> save();
            
            return redirect('editProfile')->with('status','Update Successful');
        }
}
