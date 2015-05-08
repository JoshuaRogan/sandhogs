<?php namespace App\Http\Controllers;

class RootController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Root Controller
	|--------------------------------------------------------------------------
	|	Handle all of the (mostly) static root pages (home,splash,welcome,contact,etc.)
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// $this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	/**
	 * 	Show a one time splash page for a few seconds 
	 *		then redirect to the main homepage. 
	 *		Only do this the first time. 
	 *
	 * @return Response
	 */
	public function splash()
	{
		return "Splash Page"; 
	}

	/**
	 * 	
	 *	Show contact us page 	 
	 *		
	 *
	 * @return Response
	 */
	public function contact()
	{
		return view('coming-soon'); 
		// return view('contact'); 
	}

	/**
	 * 	
	 *	Show contact us page 	 
	 *		
	 *
	 * @return Response
	 */
	public function about()
	{
		return view('about'); 
	}





}
