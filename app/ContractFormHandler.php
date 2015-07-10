<?php 

	namespace App;
	use Carbon\Carbon;

	/**
	*  Adds custom validations to contract forms
	*  @param ContractRequest $request
	*/

	class ContractFormHandler
	{
		public $errorMessages = "";
		public $effectiveDate;
		public $expiryDate;
		public $hasErrors = false;

		function __construct($request)
		{

			// First, adjust dates
		

			$this->effectiveDate= new Carbon($request->effective_date);
		    // set effective day to first day of month;
		    // $this->effectiveDate->day = 1;

		    $this->expiryDate = new Carbon($request->expiry_date);
		    // set day of expiry to last day of month
		    // $this->expiryDate->day = $this->expiryDate->daysInMonth;
			
		
		    // check if effective date is > expiry date
		    // 
		    if ( $this->effectiveDate > $this->expiryDate) {
		        $this->errorMessages .= 'Expiry date cannot be set before effective date -';
		    }

		    // check if properties selected are not committed (need to test this)
		    /*$properties = $request->properties;
		    $committedProperties = "";

		    foreach ($properties as $key => $property) {
		      $propertyInFocus = Property::findorFail($property);

		      if ($this->effectiveDate < $propertyInFocus->latestContractExpiryDate()  ) {
		        $committedProperties .= " $propertyInFocus->description";
		      }
		    }

		    if (strlen($committedProperties) > 0 ) {
		        $this->errorMessages .= 'The following properties are already committed in that date range: ' . $committedProperties;
		    }

		    if (strlen($this->errorMessages) > 0 ) {
		    	$this->hasErrors = true;
		    }
		    */
		}
	}

?>