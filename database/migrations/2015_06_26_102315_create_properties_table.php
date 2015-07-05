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
			$table->string('coordinates')->nullable();
			$table->integer('asset_value');
			$table->timestamp('valuation_date');
			$table->text('valuation_notes');
			$table->float('land_area')->nullable();
			$table->float('indoor_area')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('properties');
	}
}