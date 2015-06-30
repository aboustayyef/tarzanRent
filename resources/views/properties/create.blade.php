@extends('layout.main')

@section('title')
Create New Property
@stop

@section('content')

<h1>Create New Property</h1>

{!! Form::open(['route' => 'properties.store']) !!}

	@include('properties.form',['submitButtonText'=> 'Create Tenant'])

{!! Form::close() !!}

@stop