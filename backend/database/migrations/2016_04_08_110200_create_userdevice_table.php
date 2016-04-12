<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserdeviceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userdevice', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_userdevice_user1_idx');
			$table->string('device name', 45)->nullable();
			$table->string('status', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userdevice');
	}

}
