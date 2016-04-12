<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('Bank_Name', 45)->nullable();
			$table->string('Switcode', 45)->nullable();
			$table->string('Account_no', 45)->nullable();
			$table->string('Iban_no', 45)->nullable();
			$table->string('Address', 45)->nullable();
			$table->string('Telephone', 45)->nullable();
			$table->string('Mobile', 45)->nullable();
			$table->string('City', 45)->nullable();
			$table->string('Email', 45)->nullable();
			$table->string('Password', 45)->nullable();
			$table->integer('status')->nullable();
			$table->integer('admin_id')->index('fk_vendor_admin1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vendor');
	}

}
