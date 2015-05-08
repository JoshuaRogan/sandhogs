<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ScheduleController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Schedule Controller
	|--------------------------------------------------------------------------
	|	
	|
	*/


	/**
	 * View the roster for the correct age group and year 
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('coming-soon');
	}	

	/**
	 * View the roster for the correct age group and year 
	 *
	 * @return Response
	 */
	public function teamSchedule($age_group, $year = 2015)
	{
		return "Show the current schedule for (team = $age_group) and (year = $year)";
	}

}
