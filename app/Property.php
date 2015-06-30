<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Property extends Model {

	protected $table = 'properties';
	public $timestamps = true;

	public function contracts()
	{
		return $this->belongsToMany('App\Contract');
	}


// Convenience Functions

	public function latestContractExpiryDate(){
		$latestContractExpires = $this->contracts()->orderBy('expiry_date','desc')->first()->expiry_date;
		if (!empty($latestContractExpires)) {
			return new Carbon($latestContractExpires);
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