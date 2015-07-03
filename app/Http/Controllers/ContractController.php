<?php 

namespace App\Http\Controllers;
use App\Http\Requests\Request;
use App\Http\Requests\contractRequest;
use Carbon\Carbon;
use App\Contract;

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
    $expiry = new Carbon($request->expiry_date);
    if ( $effective > $expiry) {
      \Session::flash('message', 'Expiry date cannot be set before effective date');
      return redirect()->route('contracts.create')->withInput();
    }
    dd('all ok');
    // THINGS TO DO BEFORE STORING:
    // - Verify that expiry date is after effective date
    // - Verify that properties are not bound to other contracts in the time frame
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