{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('payment_date', 'Payment_date:') !!}
			{!! Form::text('payment_date') !!}
		</li>
		<li>
			{!! Form::label('period_start_date', 'Period_start_date:') !!}
			{!! Form::text('period_start_date') !!}
		</li>
		<li>
			{!! Form::label('period_end_date', 'Period_end_date:') !!}
			{!! Form::text('period_end_date') !!}
		</li>
		<li>
			{!! Form::label('amount', 'Amount:') !!}
			{!! Form::text('amount') !!}
		</li>
		<li>
			{!! Form::label('currency_of_payment', 'Currency_of_payment:') !!}
			{!! Form::text('currency_of_payment') !!}
		</li>
		<li>
			{!! Form::label('dollar_rate_at_payment', 'Dollar_rate_at_payment:') !!}
			{!! Form::text('dollar_rate_at_payment') !!}
		</li>
		<li>
			{!! Form::label('notes', 'Notes:') !!}
			{!! Form::textarea('notes') !!}
		</li>
		<li>
			{!! Form::label('contract_id', 'Contract_id:') !!}
			{!! Form::text('contract_id') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}