<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Team;
use App\Coach;
use App\Player;
use App\Event;

use Storage;

class TeamController extends Controller {


	private $team; 

	/** 
	 *	Create an instance of the player controller 
	 *
	 */
	public function __construct(Event $team){
		$this->middleware('auth', ['except' => ['index', 'show']]);
		$this->team = $team;
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Team $team)
	{
		return Team::visible()->get();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$coaches = Coach::all();  
		$players = Player::all(); 
		$events = Event::all(); 
		$teams = Team::visible()->get(); 

		return view('teams.create', compact('coaches', 'players', 'events', 'teams')); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Team $team, Request $request)
	{
		$team->fill($request->all());
		$team->slug = $team->name . "-" . $team->year; 
		$team->save(); 

		//Update relationships 
		$team->coaches()->sync((array)$request->input('coaches')); 
		$team->players()->sync((array)$request->input('players')); 
		$team->events()->sync((array)$request->input('events')); 

		$team->push();

		// dd($team->coaches);
		// dd($team, $team->coaches, $team->players, $team->events);
		return redirect()->route('team.edit', compact($team)); //If there were any coaches or players go to next form to give them numbers and positions 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Team $team)
	{
		return $team; 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Team $team)
	{
		return view('teams.edit', compact('team'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Team $team, Request $request)
	{
		$team->fill($request->all()); 
		$team->update(); 

		//Update relationships 
		$team->coaches()->sync((array)$request->input('coaches')); 
		$team->players()->sync((array)$request->input('players')); 
		$team->events()->sync((array)$request->input('events')); 

		$team->push();

		return redirect()->route('team.edit', $team->slug); //If there were any coaches or players go to next form to give them numbers and positions 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Team $team, Request $request)
	{
		return $team; 
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
