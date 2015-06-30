<?php 

namespace App\Http\Controllers;

use App\Property;
use \Redirect;
use App\Http\Requests\propertyRequest ;
use Illuminate\Http\Request ;


class PropertyController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $properties = Property::all();
    return view('properties.index')->with(compact('properties'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('properties.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(propertyRequest $request)
  {
    $input = $request->all();
    Property::create($input);
    return Redirect::route('properties.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
   $property = Property::findOrFail($id);
   return view('properties.show')->with('property',$property); 
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $property = Property::findOrFail($id);
    return view('properties.edit')->with('property', $property);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id, propertyRequest $request)
  {
    
    $property = Property::findOrFail($id);
    $property->update($request->all());
    return Redirect::route('properties.index');

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  {
    Property::destroy($request->id);
    return Redirect::route('properties.index');
  }
  
}

?>