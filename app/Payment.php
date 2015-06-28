<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	protected $table = 'payments';
	public $timestamps = true;

	public function contract()
	{
		return $this->belongsTo('App\Contract');
	}

}