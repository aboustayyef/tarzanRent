{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('effective_date', 'Effective_date:') !!}
			{!! Form::text('effective_date') !!}
		</li>
		<li>
			{!! Form::label('expiry_date', 'Expiry_date:') !!}
			{!! Form::text('expiry_date') !!}
		</li>
		<li>
			{!! Form::label('terms', 'Terms:') !!}
			{!! Form::textarea('terms') !!}
		</li>
		<li>
			{!! Form::label('tenant_id', 'Tenant_id:') !!}
			{!! Form::text('tenant_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}