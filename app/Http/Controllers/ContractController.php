<?php 

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Http\Requests\contractRequest;
use Carbon\Carbon;
use App\Contract;
use App\Property;
use App\Tenant;


class ContractController extends Controller 
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $contracts = Contract::all();
    return view('contracts.index')->with('contracts', $contracts);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('contracts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(contractRequest $request)
  {
    
    $effective = new Carbon($request->effective_date);
    // set effective day to first day of month;
    $effective->day = 1;

    $expiry = new Carbon($request->expiry_date);
    // set day of expiry to last day of month
    $expiry->day = $expiry->daysInMonth;

    // check if effective date is > expiry date
    if ( $effective > $expiry) {
      \Session::flash('message', 'Expiry date cannot be set before effective date');
      return redirect()->route('contracts.create')->withInput();
    }

    // check if properties selected are not committed (need to test this)
    $properties = $request->properties;
    $committedProperties = "";

    foreach ($properties as $key => $property) {
      $propertyInFocus = Property::findorFail($property);

      if ($effective < $propertyInFocus->latestContractExpiryDate()  ) {
        $committedProperties .= " $propertyInFocus->description";
      }
    }

    if (strlen($committedProperties) > 0 ) {
      \Session::flash('message', 'The following properties are already committed in that date range: ' . $committedProperties);
      return redirect()->route('contracts.create')->withInput();
    }

    // if all is ok
    $contract = new Contract;
    $contract->description = $request->description;
    $contract->effective_date = $effective;
    $contract->expiry_date = $expiry;

    // associate with tenant
    $tenant = Tenant::findOrFail($request->tenant);
    $contract->tenant()->associate($tenant);

    $contract->save();

    // attach properties
    foreach ($properties as $key => $property) {
      $propertyInFocus = Property::findOrFail($property);
      $contract->properties()->attach($propertyInFocus);
    }

    return redirect()->route('contracts.index');

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>