<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->uuid('uuid')->primary();
			$table->timestamps();
			$table->softDeletes();
			$table->string('customer')->nullable();
			$table->string('barcode')->nullable();
			$table->string('type');
			$table->string('address')->nullable();
			$table->string('date')->nullable();
			$table->string('time')->nullable();
			$table->string('recipient_mobile')->nullable();
			$table->string('recipient_name')->nullable();
			$table->string('delivery_street')->nullable();
			$table->string('delivery_city')->nullable();
			$table->string('deliver_zip')->nullable();
			$table->string('item_description')->nullable();
			$table->string('quantity')->nullable();
			$table->string('total_weight')->nullable();
			$table->string('dimension')->nullable();
			$table->string('payment_type')->nullable();
			$table->string('cod_amount')->nullable();
			$table->string('sender_name')->nullable();
			$table->string('sender_phone')->nullable();
			$table->string('sender_message')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('Order');
	}
}