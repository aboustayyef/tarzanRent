<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContractsTable extends Migration {

	public function up()
	{
		Schema::create('contracts', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('description');
			$table->timestamp('effective_date');
			$table->timestamp('expiry_date');
			$table->text('terms')->nullable();
			$table->integer('tenant_id');
		});
	}

	public function down()
	{
		Schema::drop('contracts');
	}
}