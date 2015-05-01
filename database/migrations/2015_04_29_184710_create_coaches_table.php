<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoachesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coaches', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('first');
			$table->string('last');
			$table->string('email');
			$table->string('description');
			$table->string('imgURL');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('coaches');
	}

}
