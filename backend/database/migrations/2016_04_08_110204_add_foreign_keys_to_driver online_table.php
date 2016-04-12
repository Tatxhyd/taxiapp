<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDriverOnlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('driver_online', function(Blueprint $table)
		{
			$table->foreign('driverdevice_id', 'fk_driver_online_driverdevice1')->references('id')->on('driverdevice')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('driver online', function(Blueprint $table)
		{
			$table->dropForeign('fk_driver_online_driverdevice1');
		});
	}

}
