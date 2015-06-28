{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('notes', 'Notes:') !!}
			{!! Form::textarea('notes') !!}
		</li>
		<li>
			{!! Form::label('contact_person', 'Contact_person:') !!}
			{!! Form::text('contact_person') !!}
		</li>
		<li>
			{!! Form::label('contact_details', 'Contact_details:') !!}
			{!! Form::textarea('contact_details') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}