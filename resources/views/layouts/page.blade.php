<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ __('Storydriven Gallery') }} - @yield('title')</title>

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
	<div id="page">
		<div id="page-main">
			@yield('content')
		</div><!-- /#main -->
	</div><!-- /#page -->
	@yield('close')
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>