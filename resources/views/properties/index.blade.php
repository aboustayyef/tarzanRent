@extends('layout.main')

@section('content')
	<H1>List of Properties</H1>
	<table class="table">
		<thead>
			<tr>
				<th>Description</th>
				<th>Latest Tenant</th>
				<th>Location</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($properties as $property)
			<tr>
				{{-- Description --}}
				<td><a href="{{URL::Route('properties.show',['properties' => $property->id])}}">{{$property->description}}</a></td>
				
				{{-- current Tenant --}}
				<td>
					<?php $currentTenant = $property->currentTenant(); ?>

					@if($property->isRented())
						<a href="{{Route('tenants.show',['tenants'=>$currentTenant->id])}}">
							{{$currentTenant->name}}
						</a>
						
					@else
						<em>Available for Rent</em>
					@endif
				</td>

				<td>{{$property->location}}</td>

				<td>
					<a href="{{route('properties.edit', ['properties' => $property->id])}}">Edit</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{URL::Route('properties.create')}}" class="btn btn-primary">Add new Property</a>
@stop