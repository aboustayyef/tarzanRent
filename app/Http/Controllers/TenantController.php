<?php 

namespace App\Http\Controllers;
use App\Tenant;
use \Redirect;
use App\Http\Requests\tenantRequest ;
use Illuminate\Http\Request ;


class TenantController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $tenants = Tenant::orderBy('name', 'Asc')->get();
    return view('tenants.index')->with('tenants', $tenants);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('tenants.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(tenantRequest $request)
  {
    $input = $request->all();
    Tenant::create($input);
    return Redirect::route('tenants.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $tenant = Tenant::findOrFail($id);
    return view('tenants.show')->with(compact('tenant'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $tenant = Tenant::findOrFail($id);
    return view('tenants.edit')->with('tenant', $tenant);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, tenantRequest $request)
  {
    
    $tenant = Tenant::findOrFail($id);
    $tenant->update($request->all());
    return Redirect::route('tenants.index');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    Tenant::destroy($request->id);
    return Redirect::route('tenants.index');
  }
  
}

?>