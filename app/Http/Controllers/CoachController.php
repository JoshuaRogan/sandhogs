<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CoachController extends Controller {

	
	/**
	 * Show all of the coaches 
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('profile.coachAll');
	}


}
