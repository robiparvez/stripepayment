@extends('template.default')


@section('title', '|' . ' Join')


@section('content')

	<form action="{{ route('subscription-join') }}" method="POST" id="subscription-form">
	    <div class="row">

	        <div class="large-6 columns">
	        	<label>Chosen Plan
					<select name="plan">
						<option value="small">Small ($5/month)</option>
						<option value="large">Large ($10/month)</option>
					</select>
				</label>

	        </div>

	        <div class="large-6 columns">
				@include('subscription.partials._card')
				<button class="button">Make Payment</button>
	        </div>

	    </div>
	    {!! Form::token() !!}
	</form>
@endsection




@section('scripts')
	<script src="https://js.stripe.com/v3/" type="text/javascript">
	</script>

	<script src="{{ asset('js/stripe.js') }}" type="text/javascript">
	</script>
@endsection
