<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DashboardController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Dashboard Controller
	|--------------------------------------------------------------------------
	|	Admin dashboard controller
	|
	*/
	public function __construct()
	{
		$this->middleware('auth');
	}


	/**
	 * 	Show the dashboard   
	 *
	 * @return Response
	 */
	public function index()
	{
		return view("dashboard.dashboard"); 
	}

	/**
	 * Show all of the teams and create team form 
	 *
	 * @return Response
	 */
	public function teams()
	{
		// return "Hello World"; 
		return view("dashboard.teams"); 
	}

	/**
	 *   
	 *
	 * @return Response
	 */
	public function team($age_group)
	{
		return view("dashboard.team"); 
	}


	/**
	 *   
	 *
	 * @return Response
	 */
	public function coaches()
	{
		return view("dashboard.coaches"); 
	}

}
