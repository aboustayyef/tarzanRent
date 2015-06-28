{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('location', 'Location:') !!}
			{!! Form::text('location') !!}
		</li>
		<li>
			{!! Form::label('latitude', 'Latitude:') !!}
			{!! Form::text('latitude') !!}
		</li>
		<li>
			{!! Form::label('longitude', 'Longitude:') !!}
			{!! Form::text('longitude') !!}
		</li>
		<li>
			{!! Form::label('asset_value', 'Asset_value:') !!}
			{!! Form::text('asset_value') !!}
		</li>
		<li>
			{!! Form::label('valuation_date', 'Valuation_date:') !!}
			{!! Form::text('valuation_date') !!}
		</li>
		<li>
			{!! Form::label('valuation_notes', 'Valuation_notes:') !!}
			{!! Form::textarea('valuation_notes') !!}
		</li>
		<li>
			{!! Form::label('area', 'Area:') !!}
			{!! Form::text('area') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}