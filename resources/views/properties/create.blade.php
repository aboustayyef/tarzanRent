@extends('layout.main')

@section('title')
Create New Property
@stop

@section('content')

<h1>Create New Property</h1>
<hr>
{!! Form::open(['route' => 'properties.store', 'files' => true]) !!}

	@include('properties.form',['submitButtonText'=> 'Create Property'])

{!! Form::close() !!}

@stop