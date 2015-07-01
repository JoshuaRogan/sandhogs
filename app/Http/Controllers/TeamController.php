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
		return view('teams.index', ['teams'=> Team::sortedVisibleTeams()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$teams = Team::visible()->get(); 
		$hidden_teams = Team::NotVisible()->get(); 

		return view('teams.create', compact('teams', 'hidden_teams')); 
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

		return redirect()->route('team.edit', $team->slug); //If there were any coaches or players go to next form to give them numbers and positions 

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Team $team)
	{
		return view('teams.show', ['team'=> $team]);
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

		//If there were any coaches or players go to next form to give them numbers and positions 
		return redirect()->route('team.edit', $team->slug); 
	}

	/**
	 * Show the update players numbers form for this team. 
	 * 
	 * @param Team $team 
	 * @param Request $request 
	 * @return Response
	 */
	public function editPlayersInfo(Team $team, Request $request)
	{
		return view('teams.editPlayersNumbers', ['team' => $team]);
	}

	/**
	 * Update the players numbers for this team
	 * 
	 * @param Team $team 
	 * @param Request $request 
	 * @return Response
	 */
	public function updatePlayersInfo(Team $team, Request $request)
	{
		foreach($team->players->lists('id') as $player_id){
			if($request->input($player_id)){
				$team->players()->updateExistingPivot($player_id, ['number' => $request->input($player_id)]);
			}
		}
		$team->push();

		return redirect()->route('team.edit', $team->slug); 
	}

	/**
	 * Show the update coach info form for this team. 
	 * 
	 * @param Team $team 
	 * @param Request $request 
	 * @return Response
	 */
	public function editCoachesInfo(Team $team, Request $request)
	{
		return view('teams.editCoachesInfo', ['team' => $team]);
	}

	/**
	 * Update the coaches info for this team
	 * 
	 * @param Team $team 
	 * @param Request $request 
	 * @return Response
	 */
	public function updateCoachesInfo(Team $team, Request $request)
	{
		
		foreach($team->coaches->lists('id') as $coach_id){
			if($request->input("role-$coach_id")){
				$team->coaches()->updateExistingPivot($coach_id, ['role' => $request->input("role-$coach_id")]);
			}

			if($request->input("number-$coach_id")){
				$team->coaches()->updateExistingPivot($coach_id, ['number' => $request->input("number-$coach_id")]);
			}
		}
		$team->push();

		return redirect()->route('team.edit', $team->slug); 
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Team $team)
	{
		$team->delete();
		return redirect()->route('team.create'); 
	}


	/**
	 * View the roster for the correct age group and year (temporary JSON) 
	 *
	 * @return Response
	 */
	public function roster($age_group, $year = 2015)
	{
		return view("team.roster", ["age_group"=> $age_group, "roster"=> json_decode(Storage::get('json/roster.json'))]);
	}

}
