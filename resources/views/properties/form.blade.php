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
    {!! Form::label('coordinates', 'Coordinates (for maps):') !!}
    {!! Form::text('coordinates', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('coordinates') }}</small>
</div>

<div class="form-group">
    {!! Form::label('indoor_area', 'Indoor Area (in Feet square)') !!}
    {!! Form::text('indoor_area', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('indoor_area') }}</small>
</div>

<div class="form-group">
    {!! Form::label('land_area', 'Land Area (in Feet square)') !!}
    {!! Form::text('land_area', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('land_area') }}</small>
</div>

<div class="form-group">
    {!! Form::label('asset_value', 'Asset Value: (in Dollars)') !!}
    {!! Form::text('asset_value', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('asset_value') }}</small>
</div>

<div class="form-group">
    {!! Form::label('valuation_date', 'Valuation Date: ') !!}
    {!! Form::text('valuation_date', null, ['class' => 'form-control', 'placeholder'=>'dd-mm-yyyy']) !!}
    <small class="text-danger">{{ $errors->first('valuation_date') }}</small>
</div>

<div class="form-group">
    {!! Form::label('valuation_notes', 'Notes about Valuation:') !!}
    {!! Form::textarea('valuation_notes', null, ['class' => 'form-control']) !!}
    <small class="text-danger">{{ $errors->first('valuation_notes') }}</small>
</div>

<div class="form-group">
    {!! Form::label('image', 'Property Image') !!}
    {!! Form::file('image') !!}
    <p class="help-block">Add an image here for property</p>
    <small class="text-danger">{{ $errors->first('image') }}</small>
</div>

{!! Form::submit($submitButtonText, ['class'=>'btn btn-primary']) !!}
