<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTenantsTable extends Migration {

	public function up()
	{
		Schema::create('tenants', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->text('notes')->nullable();
			$table->string('contact_person')->nullable();
			$table->text('contact_details')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tenants');
	}
}