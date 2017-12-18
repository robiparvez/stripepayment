<!DOCTYPE html>
<html>
	<head>
	<title>
		Stripe Payment Home
	</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/foundation.min.css') }}">
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