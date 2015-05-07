<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamPlayer extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_player', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('player_id')->unsigned();
			$table->foreign('player_id')->references('id')->on('players');
			$table->integer('team_id')->unsigned();
			$table->foreign('team_id')->references('id')->on('teams');
			$table->integer('number')->unsigned(); //The players number for this team 
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team_player');
	}

}
