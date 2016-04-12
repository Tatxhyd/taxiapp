<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vendor', function(Blueprint $table)
		{
			$table->foreign('admin_id', 'fk_vendor_admin1')->references('id')->on('admin')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vendor', function(Blueprint $table)
		{
			$table->dropForeign('fk_vendor_admin1');
		});
	}

}
