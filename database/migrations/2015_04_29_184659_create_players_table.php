<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('players', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('first');
			$table->string('last');
			$table->string('slug')->unique();
			$table->string('position')->nullable();
			$table->string('bio')->nullable();
			$table->string('email')->nullable();
			$table->string('imgURL')->nullable();
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
		Schema::drop('players');
	}

}
