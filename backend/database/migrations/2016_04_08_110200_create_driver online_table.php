<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriverOnlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('driver_online', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->dateTime('start_time')->nullable();
			$table->dateTime('end_time')->nullable();
			$table->integer('status')->nullable();
			$table->integer('driverdevice_id');
			$table->integer('driverdevice_Driver_id');
			$table->index(['driverdevice_id','driverdevice_Driver_id'], 'fk_online_drdevice1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('driver_online');
	}

}
