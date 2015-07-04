@extends('layout.main')

@section('title')
Update Contract
@stop

@section('content')

@include('contracts.delete_form') {{--  It's a modal --}}

<h1>Update Contract</h1>

{!! Form::model($contract, ['method'=>'PATCH', 'route' => ['contracts.update', 'contracts' => $contract->id]]) !!}

	@include('contracts.form',['submitButtonText'=> 'Update Contract'])

{!! Form::close() !!}

<!-- Lunch delete modal -->
<br>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target=".modal">
  delete
</button>

@stop