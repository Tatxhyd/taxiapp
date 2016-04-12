<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 45)->nullable();
			$table->string('last_nameame', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('phone_number', 45)->nullable();
			$table->string('password', 45)->nullable();
			$table->string('credit_card_information', 45)->nullable();
			$table->string('reason', 45)->nullable();
			$table->rememberToken();
			$table->timestamps();
			$table->string('status', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
