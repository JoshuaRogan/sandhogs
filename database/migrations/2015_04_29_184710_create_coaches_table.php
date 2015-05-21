<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\SoftDeletes;

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
			$table->string('first');
			$table->string('last');
			$table->string('slug')->unique(); 
			$table->string('email')->nullable();
			$table->string('description')->nullable();
			$table->string('imgURL')->nullable();
			$table->softDeletes();
			$table->timestamps();
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
