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
	 * Show all of the rosters for the current year  
	 *
	 * @return Response
	 */
	public function teams()
	{
		return view("dashboard.teams"); 
	}

}
