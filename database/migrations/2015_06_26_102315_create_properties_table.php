<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePropertiesTable extends Migration {

	public function up()
	{
		Schema::create('properties', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('description');
			$table->string('location');
			$table->string('latitude')->nullable();
			$table->string('longitude')->nullable();
			$table->integer('asset_value');
			$table->timestamp('valuation_date');
			$table->text('valuation_notes');
			$table->float('area');
		});
	}

	public function down()
	{
		Schema::drop('properties');
	}
}