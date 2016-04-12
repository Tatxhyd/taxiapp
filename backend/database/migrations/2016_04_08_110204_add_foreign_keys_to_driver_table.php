<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDriverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('driver', function(Blueprint $table)
		{
			$table->foreign('vendor_id', 'fk_Driver_vendor1')->references('id')->on('vendor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('driver', function(Blueprint $table)
		{
			$table->dropForeign('fk_Driver_vendor1');
		});
	}

}
