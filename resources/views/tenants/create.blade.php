@extends('layout.main')

@section('title')
Create New Tenant
@stop

@section('content')

<h1>Create New Tenant</h1>

{!! Form::open(['route' => 'tenants.store']) !!}

	@include('tenants.form',['submitButtonText'=> 'Create Tenant'])

{!! Form::close() !!}

@stop