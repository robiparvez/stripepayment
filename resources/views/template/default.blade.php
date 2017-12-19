<!DOCTYPE html>
<html>
	<head>
		{{-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
		<title>
			Stripe
			@yield('title')
		</title>

		<link rel="stylesheet" type="text/css" href="{{ asset('css/foundation.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">

	</head>

	<body>
		<div class="wrapper">

			@yield('content')

		</div>
	</body>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	@yield('scripts')

</html>


