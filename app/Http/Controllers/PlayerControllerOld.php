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
	public function create()
	{
		$player = new \App\Player; 
		$player->first  = "Bob"; 
		$player->last  = "Sherman";
		$player->position = "1B"; 
		$player->bio = "Here is the bio for this player"; 
		$player->email = "jjjr1122@gmail.com"; 
		$player->imgURL = "url/for/thisimage.jpg";  
		dd($player); 
	}


	/**
	 * Show the profile for this player
	 *
	 * @return Response
	 */
	public function profile($player_id)
	{
		return view('profile.player');
	}





}
