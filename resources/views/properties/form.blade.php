<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('description') }}</small>
</div>

<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('location') }}</small>
</div>

<div class="form-group">
    {!! Form::label('latitude', 'Latitude:') !!}
    {!! Form::text('latitude', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('latitude') }}</small>
</div>

<div class="form-group">
    {!! Form::label('longitude', 'Longitude:') !!}
    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('longitude') }}</small>
</div>

<div class="form-group">
    {!! Form::label('area', 'Area (in Feet square)') !!}
    {!! Form::text('area', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('area') }}</small>
</div>

<div class="form-group">
    {!! Form::label('asset_value', 'Asset Value: (in Dollars)') !!}
    {!! Form::text('asset_value', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('asset_value') }}</small>
</div>

<div class="form-group">
    {!! Form::label('valuation_date', 'Valuation Date: ') !!}
    {!! Form::text('valuation_date', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('valuation_date') }}</small>
</div>

<div class="form-group">
    {!! Form::label('valuation_notes', 'Notes about Valuation:') !!}
    {!! Form::textarea('valuation_notes', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('valuation_notes') }}</small>
</div>

{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
