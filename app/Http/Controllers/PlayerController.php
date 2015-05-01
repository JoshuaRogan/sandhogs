<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PlayerController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}
	
	/**
	 * Show the current year roster
	 *
	 * @return Response
	 */
	public function index()
	{
		return $this->roster(2015, "Main"); //Return the current year roster
	}


	/**
	 * Show the current year roster
	 *
	 * @return Response
	 */
	public function roster($year, $team)
	{
		return "$year Roster";
	}



}
