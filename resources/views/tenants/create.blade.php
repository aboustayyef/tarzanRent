@extends('layout.main')

@section('title')
Create New Tenant
@stop

@section('content')

<h1>Create New Tenant</h1>

{!! Form::open(['route' => 'tenants.store']) !!}

	<div class="form-group">
		{!! Form::label('name','Name:')!!}
		{!! Form::text('name',null,['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('notes','Notes:')!!}
		{!! Form::textarea('notes',null,['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('contact_person','Contact Person:')!!}
		{!! Form::text('contact_person',null,['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('contact_details','Contact Details (Phone, email..etc):')!!}
		{!! Form::textarea('contact_details',null,['class'=>'form-control'])!!}
	</div>

	{!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop