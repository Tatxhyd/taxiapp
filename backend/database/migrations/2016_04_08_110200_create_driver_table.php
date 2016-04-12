<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('driver', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('password', 45)->nullable();
			$table->string('phone_no', 45)->nullable();
			$table->string('driver_license', 45)->nullable();
			$table->dateTime('reg_date');
			$table->dateTime('last_visit');
			$table->integer('vendor_id')->index('fk_Driver_vendor1_idx');
			$table->integer('status')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('driver');
	}

}
