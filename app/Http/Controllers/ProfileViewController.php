<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\User;

class ProfileViewController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $user = Auth::user();
            return view('pages/profileView',compact('user'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id=null)
	{
            $user = $id==null? null: User::find($id);           
            return view('pages/profileView',compact('user'));
	}
}
