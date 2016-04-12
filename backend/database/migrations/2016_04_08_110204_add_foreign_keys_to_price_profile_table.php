<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPriceProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('price_profile', function(Blueprint $table)
		{
			$table->foreign('type_id', 'fk_price_profile_type1')->references('id')->on('type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('price_profile', function(Blueprint $table)
		{
			$table->dropForeign('fk_price_profile_type1');
		});
	}

}
