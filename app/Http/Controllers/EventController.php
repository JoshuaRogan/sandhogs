<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Event;
use Storage;

class EventController extends Controller {

	private $event; 

	/** 
	 *	Create an instance of the player controller 
	 *
	 */
	public function __construct(Event $event){
		$this->middleware('auth', ['except' => ['index', 'show', 'schedule']]);

		$this->event = $event;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return Event::all(); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$events = Event::all(); 
		// return "Hello";
		return view('events.create', ['events'=>Event::all()]);
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
	public function show(Event $event)
	{
		return $event; 
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
	 * Temporary schedule genator using JSON file
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function schedule()
	{

		$events = json_decode(Storage::get('json/schedule.json'));
		return view('events.allEvents', ['events'=> $events]);
	}



}
