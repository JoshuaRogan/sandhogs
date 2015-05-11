<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Team;
use Storage;

class TeamController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// Team::all(); //Just this year's teams 

		return view('dashboard.teams'); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


	/**
	 * View the roster for the correct age group and year (temporary JSON) 
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
