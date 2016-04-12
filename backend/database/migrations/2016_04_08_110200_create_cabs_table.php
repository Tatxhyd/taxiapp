<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCabsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cabs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('vehicle_no', 45)->nullable();
			$table->integer('make_id')->index('fk_cabs_make1_idx');
			$table->integer('model_id')->index('fk_cabs_model1_idx');
			$table->integer('type_id')->index('fk_cabs_type1_idx');
			$table->dateTime('registration_date')->nullable();
			$table->string('Vehicle_docs', 45)->nullable();
			$table->dateTime('vehicles_registration_expires date')->nullable();
			$table->string('current_location', 1000)->nullable();
			$table->string('is_vip', 45)->nullable();
			$table->boolean('is_classic')->nullable();
			$table->boolean('is_city')->nullable();
			$table->boolean('is_family')->nullable();
			$table->integer('vendor_id')->index('fk_cabs_vendor_idx');
			$table->integer('Driver_id')->index('fk_cabs_Driver1_idx');
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
		Schema::drop('cabs');
	}

}
