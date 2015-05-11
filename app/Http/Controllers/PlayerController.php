<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePlayerRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Player;

class PlayerController extends Controller {

	private $player; 

	/** 
	 *	Create an instance of the player controller 
	 *
	 */
	public function __construct(Player $player){
		$this->middleware('auth', ['except' => ['index', 'show']]);

		$this->player = $player;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return Player::all(); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		// return "Creating a player";
		return view('players.create', ['players'=>Player::all()]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Player $player, CreatePlayerRequest $request)
	{
		$player->fill($request->all());
		$player->slug = $player->first . "-" . $player->last; 
		$player->save();

		return redirect()->route('player.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Player $player)
	{
		return $player; 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Player $player)
	{
		return view('players.edit', ['player'=> $player]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Player $player, CreatePlayerRequest $request)
	{
		$player->fill($request->all());
		$player->slug = $player->first . "-" . $player->last;
		$player->save(); 

		return redirect()->route('player.create');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Player $player)
	{
		$player->delete();
		
		return redirect()->route('player.create'); 
	}

}
