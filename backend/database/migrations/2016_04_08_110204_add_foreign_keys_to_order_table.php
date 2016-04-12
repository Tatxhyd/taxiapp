<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->foreign('cabs_id', 'fk_order_cabs1')->references('id')->on('cabs')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('order_status_type_id', 'fk_order_order_status_type1')->references('id')->on('order_status_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('payment_type_id', 'fk_order_payment_type1')->references('id')->on('payment_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_order_user1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order', function(Blueprint $table)
		{
			$table->dropForeign('fk_order_cabs1');
			$table->dropForeign('fk_order_order_status_type1');
			$table->dropForeign('fk_order_payment_type1');
			$table->dropForeign('fk_order_user1');
		});
	}

}
