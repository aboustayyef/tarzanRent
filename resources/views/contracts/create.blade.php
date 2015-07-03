@extends('layout.main')

@section('title')
Create New Contract
@stop

@section('content')

<h1>Create New Contract</h1>
<hr>

@if(\Session::get('message'))
	<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Warning: </strong>{{\Session::get('message')}}
	</div>
@endif

{!! Form::open(['route' => 'contracts.store']) !!}

	@include('contracts.form',['submitButtonText'=> 'Create Contract'])

{!! Form::close() !!}

@stop