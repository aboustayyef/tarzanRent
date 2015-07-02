@extends('layout.main')

@section('title')
Property Details
@stop

@section('content')

@include('properties.delete_form') {{--  It's a modal --}}

<h1>Property Details</h1>

<table class="table table-striped">
	<tbody>
		<tr>
			<td>Description:</td>
			<td>{{$property->description}}</td>
		</tr>
		<tr>
			<td>Location:</td>
			<td>{{$property->location}}</td>
		</tr>
		<tr>
			<td>Value</td>
			<td>{{$property->asset_value}}</td>
		</tr>
		<tr>
			<td>Indoor Area (In Feet Square)</td>
			<td>{{$property->indoor_area}}</td>
		</tr>
		<tr>
			<td>Land Area (In Feet Square)</td>
			<td>{{$property->land_area}}</td>
		</tr>
		<tr>
			<td>Last Valuation Date</td>
			<td>{{$property->valuation_date}}</td>
		</tr>
		<tr>
			<td>Valuation Notes</td>
			<td>{{$property->valuation_notes}}</td>
		</tr>
	</tbody>
</table>

<a href="{{URL::Route('properties.edit',['properties'=> $property->id])}}" class="btn btn-primary">Edit</a>

<!-- Lunch delete modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal">
  delete
</button>

@stop