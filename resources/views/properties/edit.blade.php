@extends('layout.main')

@section('title')
Update Property Info
@stop

@section('content')

@include('properties.delete_form') {{--  It's a modal --}}

<h1>Update Property Info</h1>

{!! Form::model($property, ['method'=>'PATCH', 'route' => ['properties.update', 'properties' => $property->id]]) !!}

	@include('properties.form',['submitButtonText'=> 'Update Property'])

{!! Form::close() !!}

<!-- Lunch delete modal -->
<br>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal">
  delete
</button>

@stop