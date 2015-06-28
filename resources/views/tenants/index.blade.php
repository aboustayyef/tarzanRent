@extends('layout.main')

@section('content')
	<H1>List of Tenants</H1>
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Properties Contracted</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($tenants as $tenant)
			<?php 
				$properties = $tenant->properties();
			?>
			<tr>
				{{-- Description --}}
				<td>{{$tenant->name}}</td>
				
				{{-- list of properties --}}
				<td>
					@foreach($properties as $key => $property)
					<a href={{route('properties.show', ['properties' => $property->id])}}>{{$property->description}}</a>
						@if($key < $properties->count() - 1 ) , @endif
					@endforeach
				</td>

				<td>
					<a href="{{route('tenants.edit', ['tenants' => $tenant->id])}}">Edit</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	<a href="{{URL::Route('tenants.create')}}" class="btn btn-primary">Add new Tenant</a>
@stop