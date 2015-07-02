<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

	protected $table = 'contracts';
	public $timestamps = true;

	public function tenant()
	{
		return $this->belongsTo('App\Tenant');
	}

	public function properties()
	{
		return $this->belongsToMany('App\Property')->withTimestamps();
	}

	public function payments()
	{
		return $this->hasMany('App\Payment');
	}

}