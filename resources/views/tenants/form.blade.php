<div class="form-group">
	    {!! Form::label('name', 'Name') !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	    <small class="text-danger">{{ $errors->first('name') }}</small>
	</div>

	<div class="form-group">
		{!! Form::label('contact_person','Contact Person:')!!}
		{!! Form::text('contact_person',null,['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::label('notes','Notes:')!!}
		{!! Form::textarea('notes',null,['class'=>'form-control'])!!}
	</div>

{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}