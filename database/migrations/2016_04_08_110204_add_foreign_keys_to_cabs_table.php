<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCabsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cabs', function(Blueprint $table)
		{
			$table->foreign('Driver_id', 'fk_cabs_Driver1')->references('id')->on('driver')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('make_id', 'fk_cabs_make1')->references('id')->on('make')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('model_id', 'fk_cabs_model1')->references('id')->on('model')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_cabs_type1')->references('id')->on('type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('vendor_id', 'fk_cabs_vendor')->references('id')->on('vendor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('cabs', function(Blueprint $table)
		{
			$table->dropForeign('fk_cabs_Driver1');
			$table->dropForeign('fk_cabs_make1');
			$table->dropForeign('fk_cabs_model1');
			$table->dropForeign('fk_cabs_type1');
			$table->dropForeign('fk_cabs_vendor');
		});
	}

}
