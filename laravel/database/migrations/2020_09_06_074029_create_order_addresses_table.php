<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderAddressesTable extends Migration {

	public function up()
	{
		Schema::create('order_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('street')->nullable();
			$table->string('city')->nullable();
			$table->string('postal_code')->nullable();
			$table->string('date')->nullable();
			$table->string('time')->nullable();
			$table->string('order_uuid')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('order_addresses');
	}
}