
<div class="form-group">
    {!! Form::label('description', 'Contract Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder'=> 'Name of Tenant, List of Properties']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group">
    {!! Form::label('effective_date', 'Effective Date:') !!}
    {!! Form::text('effective_date', null, ['class' => 'form-control', 'placeholder' => 'dd-mm-yyyy']) !!}
    <small class="text-danger">{{ $errors->first('effective_date') }}</small>
</div>

<div class="form-group">
    {!! Form::label('expiry_date', 'Expiry Date:') !!}
    {!! Form::text('expiry_date', null, ['class' => 'form-control', 'placeholder' => 'dd-mm-yyyy']) !!}
    <small class="text-danger">{{ $errors->first('expiry_date') }}</small>
</div>

<div class="form-group">
    {!! Form::label('tenant', 'Tenant') !!}

    {{-- Set default depending on whether editing or creating --}}
    <?php $default = isset($contract)? $contract->tenant->id : null ;?>

    {!! Form::select('tenant', App\Tenant::availableTenants(), $default, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('tenant') }}</small>
</div>

<div class="form-group">
    {!! Form::label('properties', 'Properties (You can select multiple properties)') !!}
    
    {{-- Set default depending on whether editing or creating --}}
    <?php $default = isset($contract)? $contract->properties->lists('id')->toArray() : null ;?>

    {!! Form::select('properties[]', App\Property::availableProperties(), $default, [
                                'class' => 'form-control',
                                'id'    => 'properties',
                                'multiple' => true
                                ]) !!}
    <small class="text-danger">{{ $errors->first('properties') }}</small>

</div>

<div class="form-group">
    {!! Form::label('terms', 'Terms and Notes') !!}
    {!! Form::textarea('terms', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('terms') }}</small>
</div>

{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}