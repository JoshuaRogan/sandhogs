<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Any type of coach (a.k.a. staff) resource 
Route::bind('staff', function($slug)
{
	return App\Coach::whereSlug($slug)->first();
});
Route::resource('staff', 'CoachController'); 



//Player Resource 
Route::bind('player', function($slug)
{
	return App\Player::whereSlug($slug)->first();
});
Route::resource('player', 'PlayerController'); 



//Event Resource 
Route::bind('event', function($slug)
{
	return App\Event::whereSlug($slug)->first();
});
Route::resource('event', 'EventController'); 



//Team Resource 
Route::bind('team', function($slug) 
{
	return App\Team::whereSlug($slug)->first();
});
Route::resource('team', 'TeamController'); 

Route::get('team/{team}/edit-players-info', [
    'as' => 'team.editPlayersInfo', 'uses' => 'TeamController@editPlayersInfo'
]);

Route::patch('team/{team}/update-players-info', [
    'as' => 'team.updatePlayersInfo', 'uses' => 'TeamController@updatePlayersInfo'
]);

Route::get('team/{team}/edit-coaches-info', [
    'as' => 'team.editCoachesInfo', 'uses' => 'TeamController@editCoachesInfo'
]);

Route::patch('team/{team}/update-coaches-info', [
    'as' => 'team.updateCoachesInfo', 'uses' => 'TeamController@updateCoachesInfo'
]);








//Root (mostly) static pages 
Route::get('/', 'RootController@index');
Route::get('home', 'RootController@index');
Route::get('splash', 'RootController@soon');
Route::get('contact', 'RootController@soon');
Route::get('about', 'RootController@about');
Route::get('store', 'RootController@soon');
Route::get('coaches', 'RootController@coaches');

// Temporary roster controller 
Route::get('roster/{age_group}', 'TeamController@roster'); //Change this to a redirect to current year 
Route::get('roster/{age_group}/{year}', 'TeamController@roster');
Route::get('schedule', 'EventController@schedule');



// //Profiles 
// Route::get('player/{playerID}', 'PlayerController@profile');
// Route::get('coach/{coachID}', 'CoachController@profile');
// // Route::get('coaches/', 'CoachController@index');



// //Schedules (i.e. list of games)
// Route::get('schedule/', 'ScheduleController@index'); 
// Route::get('schedules/', 'ScheduleController@index'); 
// Route::get('schedule/{age_group}', 'ScheduleController@teamSchedule'); //Change this to a redirect to current year 
// Route::get('schedule/{age_group}/{year}', 'ScheduleController@teamSchedule');


// /***************************DASHBOARD***************************/

// 	//Viewing
// Route::get('dashboard/', 'DashboardController@index');
Route::get('dashboard/', 'RootController@soon');

// 		//Teams
// Route::get('dashboard/teams/', 'DashboardController@teams');
// Route::get('dashboard/team/{age_group}/{year}', 'DashboardController@team');

// // 		//Coaches
// Route::get('dashboard/coaches/', 'DashboardController@coaches');

// Route::post('dashboard/coaches/create', 'CoachController@create');


// 		//Players


// 	//Creating, Updating, Deleting


// Route::get('dashboard/team/create', 'TeamController@create');
// Route::get('dashboard/player/create', 'PlayerController@create');
// Route::get('dashboard/teams/', 'TeamController@create');


// Rout unauthenicated users to the login page 
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

