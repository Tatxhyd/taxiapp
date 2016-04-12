<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin', function(Blueprint $table)
		{
			$table->foreign('admin_group_id', 'fk_admin_admin_group1')->references('id')->on('admin_group')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin', function(Blueprint $table)
		{
			$table->dropForeign('fk_admin_admin_group1');
		});
	}

}
