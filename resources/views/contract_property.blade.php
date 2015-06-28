{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('contract_id', 'Contract_id:') !!}
			{!! Form::text('contract_id') !!}
		</li>
		<li>
			{!! Form::label('property_id', 'Property_id:') !!}
			{!! Form::text('property_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}