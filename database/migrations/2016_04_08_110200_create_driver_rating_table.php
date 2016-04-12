<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDriverRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('driver_rating', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('rating', 45)->nullable();
			$table->text('comment', 16777215)->nullable();
			$table->string('status', 45)->nullable();
			$table->integer('order_id');
			$table->integer('order_user_id');
			$table->index(['order_id','order_user_id'], 'fk_driver_rating_order1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('driver_rating');
	}

}
