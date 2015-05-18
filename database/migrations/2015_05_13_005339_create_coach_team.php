<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateCoachTeam extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coach_team', function(Blueprint $table)
		{
			$table->integer('coach_id')->unsigned()->index();
			$table->foreign('coach_id')->references('id')->on('coaches')->onDelete('cascade'); 

			$table->integer('team_id')->unsigned()->index();
			$table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade'); 

			$table->integer('number')->unsigned()->nullable(); //The number this coach is on the team
			$table->string('role')->nullable(); //The coaches role on this team

			$table->softDeletes();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coach_team');
	}

}
