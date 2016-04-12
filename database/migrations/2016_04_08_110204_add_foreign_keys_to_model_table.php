<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToModelTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('model', function(Blueprint $table)
		{
			$table->foreign('make_id', 'fk_model_make1')->references('id')->on('make')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('model', function(Blueprint $table)
		{
			$table->dropForeign('fk_model_make1');
		});
	}

}
