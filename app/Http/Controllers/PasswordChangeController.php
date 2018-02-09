<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

class PasswordChangeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            return view('pages.passwordChange');
	}
        
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
            $user = Auth::user();
            $user->user_password = Hash::make($request->input('password'));
            $user->save();
            
            return redirect('changePassword')->with('status','Password Changed!');
	}
        
        public function forgetIndex(){
            return view('pages.forgetPassword');
        }
        
        public function forgetPasswordChange(Request $request){
            if(User::where('email',"=", $request->email)->first()){
                //email password
                return redirect('passwordConfirm');
            } else {
                return redirect('forgetPassword')->with('error', 'User is not registered' );
            }
        }
}
