<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDriverdeviceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('driverdevice', function(Blueprint $table)
		{
			$table->foreign('Driver_id', 'fk_driverdevice_Driver1')->references('id')->on('driver')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('driverdevice', function(Blueprint $table)
		{
			$table->dropForeign('fk_driverdevice_Driver1');
		});
	}

}
