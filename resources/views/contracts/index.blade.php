@extends('layout.main')

@section('title')
List of Tarzan Contracts
@stop

@section('content')

	<H1>List of Rent Contracts</H1>
	<table class="table">
		<thead>
			<tr>
				<th>Description</th>
				<th>Properties</th>
				<th>Expires</th>
				<th>Months Left</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($contracts as $contract)
			<?php 
				$properties = $contract->properties;
			?>
			<tr>
				{{-- Description --}}
				<td>{{$contract->description}}</td>
				
				{{-- list of properties --}}
				<td>
					@foreach($properties as $key => $property)
					<a href={{route('properties.show', ['properties' => $property->id])}}>{{$property->description}}</a>
						@if($key < $properties->count() - 1 ) , @endif
					@endforeach
				</td>
				
				<td>
					<?php $expiry = new Carbon\Carbon($contract->expiry_date); ?>
					{{ $expiry->format('M, Y')}}
				</td>
				
				<td>{{$expiry->diffInMonths()}}</td>

				<td>
					<a href="{{route('contracts.edit', ['contracts' => $contract->id])}}">Edit</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>

@stop