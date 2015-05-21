<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; 

use App\User;
use App\Team;
use App\Player;
use App\Coach;
use App\Event;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UsersTableSeeder');
		$this->call('InitialDataSeeder');
		// $this->call('CoachesTableSeeder');
		// $this->call('EventsTableSeeder');
	}
}

class UsersTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        User::create(['email' => 'jjjr1122@gmail.com', 'password'=> bcrypt('570309118Five'), 'role'=> 'admin', 'name'=> 'Josh Rogan']);
        User::create(['email' => 'mcgloin@electricitybaseball.com ', 'password'=> bcrypt('invaders2011'), 'role'=> 'admin', 'name'=> 'Paul McGloin']);
    }
}

class InitialDataSeeder extends Seeder {
    public function run()
    {
        DB::table('players')->delete();
        DB::table('coaches')->delete();
        DB::table('events')->delete();

        $json = json_decode(Storage::get('json/master_roster.json'));
        $teams = array(); 

        foreach($json as $player){
        	$team_name = strtolower($player->team);
        	
        	if(!array_key_exists($team_name, $teams)){
        		$teams[$team_name] = Team::create([
        			'name' => $team_name,
					'slug' => $team_name . "-2015",
					'year' => 2015,
					'description' => '',
					'visible' => true
				]);
        	}

        	//Add the player to this team 
        	$new_player = Player::create([
        		'first' => $player->first, 
        		'last' => $player->last,
        		'slug' => $player->first . " " . $player->last
        	]);

        	$teams[$team_name]->players()->attach($new_player->id, ['number'=> $player->number]);
        	$teams[$team_name]->push();
        }  

        echo "Teams and Players Created\n"; 

        $json = json_decode(Storage::get('json/schedule-updated.json'));
        foreach($json as $event){
        	$team_name = strtolower($event->Team); 
        	
        	if(!array_key_exists($team_name, $teams)){
        		$teams[$team_name] = Team::create([
        			'name' => $team_name,
					'slug' => $team_name . "-2015",
					'year' => 2015,
					'description' => '',
					'visible' => true
				]);
        	}


        	$new_event = Event::create([
        		'name' => $event->Event, 
        		'slug' => $event->Event,
        		'start_date' => new Carbon($event->start_date),
        		'end_date' => new Carbon($event->end_date),
        		'location' => $event->Location,
        	]);

        	$teams[$team_name]->events()->attach($new_event->id);
        	$teams[$team_name]->push();
        }

        echo "Events Created\n";

        $json = json_decode(Storage::get('json/staff.json'));
        foreach($json as $coach){
        	$team_name = strtolower($coach->team); 

        	if(!array_key_exists($team_name, $teams)){
        		$teams[$team_name] = Team::create([
        			'name' => $team_name,
					'slug' => $team_name . "-2015",
					'year' => 2015,
					'description' => '',
					'visible' => true
				]);
        	}

        	$new_coach = Coach::create([
        		'first' => $coach->first, 
        		'last' => $coach->last, 
        		'slug' => $coach->first . ' ' . $coach->last 
        	]);


        	$teams[$team_name]->coaches()->attach($new_coach->id);
        	$teams[$team_name]->push();
        }

        echo "Coaches Added\n";


    }
}
