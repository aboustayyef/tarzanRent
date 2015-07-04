@extends('layout.main')

@section('title')
Create New Contract
@stop

@section('content')

<h1>Create New Contract</h1>
<hr>

{!! Form::open(['route' => 'contracts.store']) !!}

	@include('contracts.form',['submitButtonText'=> 'Create Contract'])

{!! Form::close() !!}

@stop