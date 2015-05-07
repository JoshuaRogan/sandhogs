<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamCoach extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		Schema::create('team_coach', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('coach_id')->unsigned();
			$table->foreign('coach_id')->references('id')->on('players');
			$table->integer('team_id')->unsigned();
			$table->foreign('team_id')->references('id')->on('teams');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('team_coach');
	}

}
