@extends('layout.main')

@section('title')
Update Tenant Info
@stop

@section('content')

@include('tenants.delete_form') {{--  It's a modal --}}

<h1>Update Tenant Info</h1>

{!! Form::model($tenant, ['method'=>'PATCH', 'route' => ['tenants.update', 'tenants' => $tenant->id]]) !!}

	@include('tenants.form',['submitButtonText'=> 'Update Tenant'])

{!! Form::close() !!}

<!-- Lunch delete modal -->
<br>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal">
  delete
</button>

@stop