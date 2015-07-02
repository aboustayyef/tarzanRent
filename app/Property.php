<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Property extends Model {

	protected $table = 'properties';
	public $timestamps = true;

	 protected $guarded = ['created_at'];

	public function contracts()
	{
		return $this->belongsToMany('App\Contract')->withTimestamps();
	}

// mutators

	public function setValuationDateAttribute($value){
		$this->attributes['valuation_date'] = new Carbon($value);
	}


// Convenience Functions

	public function latestContractExpiryDate(){
		if ($this->contracts()->count() > 0) 
		{
			$latestContractExpires = $this->contracts()->orderBy('expiry_date','desc')->first()->expiry_date;
			if (!empty($latestContractExpires)) 
			{
				return new Carbon($latestContractExpires);
			}		
		}
		return false;
	}

	public function isRented(){
		$latestContractExpiryDate = $this->latestContractExpiryDate();
		if ($latestContractExpiryDate) {
			$now = new Carbon;
			if ($latestContractExpiryDate > $now) {
				return true;
			}
		}
		return false;
	}

	public function currentTenant(){
		if ($this->isRented()) {
			return $this->contracts()->orderBy('expiry_date','desc')->first()->tenant;
		}
		return false;
	}

}