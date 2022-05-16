<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>{{ config('app.name', 'Laravel') }}</title>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		{{-- <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}"> --}}
		{{-- <link rel="stylesheet" href="{{asset('css/mdb.css')}}"> --}}

		@yield('cssExtras')
			@yield('jsLibExtras')
			@yield('styleExtras')

	</head>
	<body>
		@include('layouts.partials.header')

		<main>
			@yield('content')
		</main>

		@include('layouts.partials.footer')

		<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
		{!! Toastr::message() !!}
		@yield('jsLibExtras2')

		@yield('jqueryExtra')
	</body>
</html>
