<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;

class ListController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
            $users = User::where('lastname','LIKE','%'.$request->input('lastname').'%')
                    ->where('firstname','LIKE','%'.$request->input('firstname').'%')
                    ->where('country','LIKE','%'.$request->input('country').'%')
                    ->where('city','LIKE','%'.$request->input('city').'%')
                    ->get();
            return view('pages.list',compact('users'));
	}

}
