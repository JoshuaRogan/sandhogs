<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCoachRequest;
use App\Http\Controllers\Controller;
use App\Coach;

use Illuminate\Http\Request;

class CoachController extends Controller {

	private $coach; 


	public function __construct(Coach $coach){
		$this->middleware('auth', ['except' => ['index', 'show']]);

		$this->coach = $coach;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		// dd(Coach::all());
		return Coach::all(); 
	}

	/**
	 * Show the form for creating a new coach.
	 *
	 * @return Response
	 */
	public function create()
	{
		$coaches = Coach::all(); 
		return view('coaches.create', compact('coaches'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Coach $coach, CreateCoachRequest $request)
	{
		$coach->fill($request->all());
		$coach->slug = $coach->first . "-" . $coach->last; 
		$coach->save();

		return redirect()->route('staff.create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Coach $coach)
	{
		// $coach = Coach::whereSlug($slug)->first(); 
		// dd($coach);
		// return 'show'; 
		return $coach;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Coach $coach)
	{
		return view('coaches.edit', compact('coach'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Coach $coach, CreateCoachRequest $request)
	{
		$coach->fill($request->all());
		$coach->slug = $coach->first . "-" . $coach->last; 
		$coach->save();
		return redirect()->route('staff.create');    
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Coach $coach)
	{
		$coach->delete();
		
		return redirect()->route('staff.create'); 
	}

}
