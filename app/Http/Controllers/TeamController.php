<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Team;
use App\Http\Controllers\Controller;
use \Storage;

class TeamController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Team Controller
	|--------------------------------------------------------------------------
	|	
	|
	*/

	/**
	 * Show all of the rosters for the current year  
	 *
	 * @return Response
	 */
	public function index($year = 2015)
	{
		//Get the roster for this 
		return "Show all of the rosters ";
	}

	/**
	 * Create a new team   
	 *
	 * @return Response
	 */
	public function create()
	{	
		// $team = new Team; 
		// $team->name = "9u";
		// $team->description = "Players 9 or under"; 
		// $team->save(); 

		// $team = new Team; 
		// $team->name = "10u";
		// $team->description = "Players 10 or under"; 
		// $team->save(); 

		// $team = Team::all()->delete(); 
		// dd(Team::where('id', '<', 100)->delete());
		dd(Team::all()); 
	}


	/**
	 * View the roster for the correct age group and year 
	 *
	 * @return Response
	 */
	public function roster($age_group, $year = 2015)
	{
		// $bugs = Bug::all(); 
		// return view('bugs.showAll', ['bugs'=> $bugs]); 
		// return "year = $year" . "age group = $age_group"; 
		// return var_dump($year, $age_group) . "year = $year " . "age group = $age_group"; 
		// return dd($request, $year, $age_group); 



		return view("team.roster", ["age_group"=> $age_group, "roster"=> json_decode(Storage::get('json/roster.json'))]);
	}

}
