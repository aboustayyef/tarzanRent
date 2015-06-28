<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractPropertyTable extends Migration {

	public function up()
	{
		Schema::create('contract_property', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('contract_id');
			$table->integer('property_id');
		});
	}

	public function down()
	{
		Schema::drop('contract_property');
	}
}