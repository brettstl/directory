<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Staff extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('staff', function($table)
		{
			$table->increments('id');
			$table->string('email')->unique();
			$table->string('name');
			$table->string('position');
			$table->string('phone');
			$table->string('bio');
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
		//
		Schema::drop('staff');
	}

}

