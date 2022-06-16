<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="description" content="{{$config->description}}" />

		{{-- <title>{{ config('app.name') }}</title> --}}
		<title>@yield('title') | {{$config->title }}</title>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		{{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/> --}}
		{{-- <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}"> --}}
		{{-- <link rel="stylesheet" href="{{asset('css/mdb.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('css/main.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
		@yield('jsLibExtras')

		@yield('cssExtras')
			@yield('styleExtras')
	</head>
	<body>
		@include('layouts.partials.header')

		@yield('content')

		@include('layouts.partials.footer')

		<script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
		{{-- <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script> --}}
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> --}}
		<script type="text/javascript" src="{{asset('js/general.js')}}"></script>
		{!! Toastr::message() !!}
		@yield('jsLibExtras2')

		{{-- {{$carrito}} --}}
		@yield('jqueryExtra')
		<script type="text/javascript">
		const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
if (this.matchMedia("(min-width: 768px)").matches) {
	$dropdown.hover(
		function() {
			const $this = $(this);
			$this.addClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "true");
			$this.find($dropdownMenu).addClass(showClass);
		},
		function() {
			const $this = $(this);
			$this.removeClass(showClass);
			$this.find($dropdownToggle).attr("aria-expanded", "false");
			$this.find($dropdownMenu).removeClass(showClass);
		}
	);
} else {
	$dropdown.off("mouseenter mouseleave");
}
});
		</script>
	</body>
</html>
