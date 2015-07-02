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

	public function properties(){
		$properties = new Collection;
		$allContracts = $this->contracts;
		foreach ($allContracts as $key => $contract) {
			$properties = $properties->merge($contract->properties);
		}
		return $properties;
	}

	public static function availableTenants(){
		$tenants = Self::all();
		$result = [];
		foreach ($tenants as $tenant) {
			$result[$tenant->id] = $tenant->name;
		}
		return $result;
	}

}
