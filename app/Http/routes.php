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

Route::get('/', 'RootController@index');
Route::get('home', 'RootController@index');
Route::get('splash', 'RootController@splash');
Route::get('contact', 'RootController@contact');

//Teams (i.e. roster/coach information)


Route::get('team/', 'TeamController@index'); //Show all of the teams 
Route::get('teams/', 'TeamController@index'); //Show all of the teams  
Route::get('team/{age_group}', 'TeamController@roster'); //Change this to a redirect to current year 
Route::get('team/{age_group}/{year}', 'TeamController@roster');
Route::get('teams/{age_group}', 'TeamController@roster'); //Change this to a redirect to current year 
Route::get('teams/{age_group}/{year}', 'TeamController@roster');



//Profiles 
Route::get('player/{playerID}', 'PlayerController@profile');
Route::get('coach/{coachID}', 'CoachController@profile');
Route::get('coaches/', 'CoachController@index');



//Schedules (i.e. list of games)
Route::get('schedule/', 'ScheduleController@index'); 
Route::get('schedules/', 'ScheduleController@index'); 
Route::get('schedule/{age_group}', 'ScheduleController@teamSchedule'); //Change this to a redirect to current year 
Route::get('schedule/{age_group}/{year}', 'ScheduleController@teamSchedule');


//Dashboard (Modifying data area)
Route::get('dashboard/', 'DashboardController@index');
Route::get('dashboard/teams/', 'DashboardController@teams');
Route::get('dashboard/teams/create', 'DashboardController@createTeam');





// Route::get('dashboard/team/create', 'TeamController@create');
Route::get('dashboard/player/create', 'PlayerController@create');







// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

