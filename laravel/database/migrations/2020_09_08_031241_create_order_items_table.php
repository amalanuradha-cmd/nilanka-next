<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderItemsTable extends Migration {

	public function up()
	{
		Schema::create('order_items', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('item_description')->nullable();
			$table->string('quantity')->nullable();
			$table->uuid('order_id')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('order_items');
	}
}