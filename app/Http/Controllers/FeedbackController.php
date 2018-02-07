<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Feedback;
use Illuminate\Http\Request;

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
            
            $feedback->feedback_firstname = $request->input('firstname');
            $feedback->feedback_lastname = $request->input('lastname');
            $feedback->feedback_email = $request->input('email');
            $feedback->feedback_comment = $request->input('comment');
            $feedback->save();
            
            return redirect('contact')->with('status','success');
	}
}
