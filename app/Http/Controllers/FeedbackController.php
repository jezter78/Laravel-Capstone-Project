<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Feedback;
use Illuminate\Http\Request;
use Validator;
class FeedbackController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            return view('pages/contact');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
            $feedback = new Feedback();
            
            $validator = Validator::make($request->all(), [
                'firstname' => 'required',
                'lastname' => 'required',
                'gender' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                'company' => 'required',
                'country' => 'required',
                'city' => 'required',
            ]);
            
            if ($validator->fails())
            {
                return redirect('contact')->withErrors($validator->errors());
            } else {
                $feedback->firstname = $request->input('firstname');
                $feedback->lastname = $request->input('lastname');
                $feedback->email = $request->input('email');
                $feedback->comment = $request->input('comment');
                $feedback->save();            
                return redirect('contact')->with('status','success');               
            }
	}
}
