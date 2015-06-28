<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->timestamp('payment_date');
			$table->timestamp('period_start_date');
			$table->timestamp('period_end_date');
			$table->float('amount');
			$table->string('currency_of_payment');
			$table->float('dollar_rate_at_payment');
			$table->text('notes')->nullable();
			$table->integer('contract_id');
			$table->string('description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}