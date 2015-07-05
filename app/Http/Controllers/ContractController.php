<?php 

namespace App\Http\Controllers;

use App\Http\Requests\contractRequest;
use Carbon\Carbon;
use App\Contract;
use App\Property;
use App\Tenant;
use App\ContractFormHandler ;
use Illuminate\Http\Request ;
use Redirect;


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

    // use my custom handler to fix dates, check if dates are valid and see if the stores are available to rent
    $contractFormHandler = new ContractFormHandler($request);
    
    if ($contractFormHandler->hasErrors ) {
      \Session::flash('message', $contractFormHandler->errorMessages);
      \Session::flash('messageType', 'warning');
      return redirect()->route('contracts.create')->withInput();
    }

    // if all is ok
    $contract = new Contract;
    $contract->description = $request->description;
    $contract->effective_date = $contractFormHandler->effectiveDate;
    $contract->expiry_date = $contractFormHandler->expiryDate;

    // associate with tenant
    $tenant = Tenant::findOrFail($request->tenant);
    $contract->tenant()->associate($tenant);

    $contract->save();

    // attach properties
    foreach ($request->properties as $key => $property) {
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

    $contract = Contract::findOrFail($id);
    return view('contracts.edit')->with('contract', $contract);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, contractRequest $request)
  {
    // use my custom handler to fix dates, check if dates are valid and see if the stores are available to rent
    $contractFormHandler = new ContractFormHandler($request);
    
    if ($contractFormHandler->hasErrors ) {
      \Session::flash('message', $contractFormHandler->errorMessages);
      \Session::flash('messageType', 'warning');
      return redirect()->route('contracts.edit', ['contracts' => $id])->withInput();
    }

    // remove previous associations to replace with new form
    $contract = Contract::findOrFail($id);
    $contract->tenant()->dissociate();
    $contract->properties()->detach();

    // update info
    $contract->description = $request->description;
    $contract->effective_date = $contractFormHandler->effectiveDate;
    $contract->expiry_date = $contractFormHandler->expiryDate;

    // associate with tenant
    $tenant = Tenant::findOrFail($request->tenant);
    $contract->tenant()->associate($tenant);

    // attach properties
    foreach ($request->properties as $key => $property) {
      $propertyInFocus = Property::findOrFail($property);
      $contract->properties()->attach($propertyInFocus);
    }

    $contract->save();
    return redirect()->route('contracts.index');

    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    Contract::destroy($request->id);
    return Redirect::route('contracts.index');    
  }
  
}

?>