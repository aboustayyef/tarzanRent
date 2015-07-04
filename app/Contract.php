<?php

namespace App;

use Carbon\Carbon;

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

// mutators

	public function getEffectiveDateAttribute($value){
		$carbon = new Carbon($value);
		return $carbon->format('d-m-Y');
	}

	public function getExpiryDateAttribute($value){
		$carbon = new Carbon($value);
		return $carbon->format('d-m-Y');
	}


}