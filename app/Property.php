<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model {

	protected $table = 'properties';
	public $timestamps = true;

	public function contracts()
	{
		return $this->belongsToMany('App\Contract');
	}

}