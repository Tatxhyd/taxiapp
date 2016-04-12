<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriverdeviceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('driverdevice', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('token', 100)->nullable();
			$table->integer('Driver_id')->index('fk_driverdevice_Driver1_idx');
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
		Schema::drop('driverdevice');
	}

}
