<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePriceProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('price_profile', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->float('base_fare', 10, 0)->nullable();
			$table->integer('min_kms')->nullable();
			$table->float('price_per_km', 10, 0)->nullable();
			$table->integer('status')->nullable();
			$table->integer('type_id')->index('fk_price_profile_type1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('price_profile');
	}

}
