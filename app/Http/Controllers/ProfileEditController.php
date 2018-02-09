<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

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

            $user ->create($request->all());
            $user -> save();
            
            return redirect('editProfile')->with('status','Update Successful');
        }
        
        public function show($id){
            $user = User::find($id);
            return view('pages/editProfile',compact('user'));
        }
        
        public function update($id){
            echo "hello";
        }
}
