<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
      $table->string('district_id')->nullable();
      $table->string('name_en')->nullable();
      $table->string('name_si')->nullable();
      $table->string('name_ta')->nullable();
      
      $table->string('sub_name_en')->nullable();
      $table->string('sub_name_si')->nullable();
      $table->string('sub_name_ta')->nullable();
      
      $table->string('postcode')->nullable();
      $table->string('latitude')->nullable();
      $table->string('longitude')->nullable();

  });
}

	public function down()
	{
		Schema::drop('cities');
	}
}