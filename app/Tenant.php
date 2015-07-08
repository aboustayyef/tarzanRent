<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class Tenant extends Model {

	protected $table = 'tenants';
	protected $fillable = ['name', 'notes', 'contact_person', 'contact_details'];
	public $timestamps = true;


	public function contracts()
	{
		return $this->hasMany('App\Contract');
	}

	


	/*
		We can only access the properties through the contracts.
 	*/

	/**
	 * Get a list a properties rented by this tenant
	 * We can only access properties through contracts
	 * 					
	 * @return [Collection] [Collection of App\Propery objects]
	 */
	public function properties(){

		if ($this->contracts->count() > 0) {
			$properties = new Collection;
			$allContracts = $this->contracts;
			foreach ($allContracts as $key => $contract) {
				$properties = $properties->merge($contract->properties);
			}
			return $properties;
		}
		return false;
		
	}

	/**
	 * Show a list of all available tenants
	 * @return [array] list of tenants
	 */
	public static function availableTenants(){
		$tenants = Self::all();
		$result = [];
		foreach ($tenants as $tenant) {
			$result[$tenant->id] = $tenant->name;
		}
		return $result;
	}

}
