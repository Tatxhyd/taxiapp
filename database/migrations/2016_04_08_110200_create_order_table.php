<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('fk_order_user1_idx');
			$table->integer('payment_type_id')->index('fk_order_payment_type1_idx');
			$table->string('pick_location', 45)->nullable();
			$table->string('drop_location', 45)->nullable();
			$table->string('total_cash', 45)->nullable();
			$table->string('date_of_order', 45)->nullable();
			$table->integer('order_status_type_id')->index('fk_order_order_status_type1_idx');
			$table->integer('cabs_id');
			$table->integer('cabs_make_id');
			$table->integer('cabs_model_id');
			$table->integer('cabs_type_id');
			$table->integer('cabs_vendor_id');
			$table->integer('cabs_Driver_id');
			$table->integer('tip')->nullable();
			$table->index(['cabs_id','cabs_make_id','cabs_model_id','cabs_type_id','cabs_vendor_id','cabs_Driver_id'], 'fk_order_cabs1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order');
	}

}
