@extends('layout.main')

@section('title')
Update Tenant Info
@stop

@section('content')

@include('tenants.delete_form') {{--  It's a modal --}}

<h1>Tenant Details </h1>

<table class="table table-striped">
	<tbody>
		<tr>
			<td>Tenant Name: </td>
			<td>{{$tenant->name}}</td>
		</tr>
		<tr>
			<td>Contact Person:</td>
			<td>{{$tenant->contact_person}}</td>
		</tr>
		<tr>
			<td>Notes</td>
			<td>{{$tenant->notes}}</td>
		</tr>
	</tbody>
</table>

<a href="{{URL::Route('tenants.edit',['tenants'=> $tenant->id])}}" class="btn btn-primary">Edit</a>

<!-- Lunch delete modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal">
  delete
</button>

@stop