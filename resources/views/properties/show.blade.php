@extends('layout.main')

@section('title')
Property Details
@stop

@section('content')

@include('properties.delete_form') {{--  It's a modal --}}
<div class="row">
	<h1>Property: {{$property->description}}</h1>
	@if($property->image)
		<img src="{{url('img/properties')}}/{{$property->image}}" style="max-width:300px">
	@endif

	<table class="table table-striped">
		<tbody>
			@if($tenant = $property->currentTenant())
				<tr>
					<td>Currently Rented By: </td>
					<td><a href="{{route('tenants.show', ['tenants' => $tenant->id])}}">{{$tenant->name}}</a></td>
				</tr>
				<tr>
					<td>Until:</td>
					<td>{{$property->latestContractExpiryDate()->format('M, Y')}}</td>
				</tr>

			@endif
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
</div>
	

<a href="{{URL::Route('properties.edit',['properties'=> $property->id])}}" class="btn btn-primary">Edit</a>

<!-- Lunch delete modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal">
  delete
</button>

@stop