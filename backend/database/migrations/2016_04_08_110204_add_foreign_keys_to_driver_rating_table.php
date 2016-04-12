<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDriverRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('driver_rating', function(Blueprint $table)
		{
			$table->foreign('order_id', 'fk_driver_rating_order1')->references('id')->on('order')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('driver_rating', function(Blueprint $table)
		{
			$table->dropForeign('fk_driver_rating_order1');
		});
	}

}
