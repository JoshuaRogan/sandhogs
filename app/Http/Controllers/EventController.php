<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateEventRequest;
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
		return Event::all(); 
	}

	/**
	 * Show the form for creating a new Event.
	 *
	 * @return Response
	 */
	public function create()
	{
		$events = Event::all(); 
		return view('events.create', ['events'=>Event::all()]);
	}

	/**
	 * Create a new event
	 * 
	 * @param type Event $event 
	 * @param type CreateEventRequest $request 
	 * @return type
	 */
	public function store(Event $event, CreateEventRequest $request)
	{
		$event->fill($request->all());
		$event->slug = $event->name;
		$event->save();

		return redirect()->route('event.create');
	}

	/**
	 * Description
	 * @param type Event $event 
	 * @return type
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
	public function edit(Event $event)
	{
		return view('events.edit', ['event'=> $event]);
	}

	/**
	 * Update a an existing event. Not changing the slug. 
	 * 
	 * @param type Event $event 
	 * @param type CreateEventRequest $request 
	 * @return type
	 */
	public function update(Event $event, CreateEventRequest $request)
	{
		$event->fill($request->all());
		$event->save();
		
		return redirect()->route('event.create');
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
