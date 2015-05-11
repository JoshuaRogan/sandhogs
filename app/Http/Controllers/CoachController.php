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
		return "All Coaches"; 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$coaches = Coach::all(); 
		return view('dashboard.coaches', compact('coaches'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Coach $coach, CreateCoachRequest $request)
	{
		$coach->fill($request->all());
		$coach->slug = strtolower(str_replace(" ", "", $coach->first) . "-" . str_replace(" ", "", $coach->last));
		//Generate a unique slug move this to the model
		$i = 1;
		while(Coach::withTrashed()->where('slug', '=', $coach->slug)->count() > 0){
			$coach->slug = strtolower(str_replace(" ", "", $coach->first) . "-" . str_replace(" ", "", $coach->last)) . "-" . $i;
			$i++;
		}

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
		return view('dashboard.coaches-edit', compact('coach'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Coach $coach, CreateCoachRequest $request)
	{
		$coach->fill($request->all())->save();
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
