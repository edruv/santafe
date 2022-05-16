@extends('layouts.front')

@section('title', 'Nosotros')
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
@endsection
@section('cssExtras')
	<style media="screen">
	</style>
@endsection
@section('content')
	<section class="bg-huevo">
		<div class="container">
			<div class="row py-5">
				<div class="col-12 col-lg-6">
					<div class="bg-white p-3 h-100">
						<img class="img-fluid" src="{{ asset('img/photos/seccions/'.$elements[1]->imagen) }}" alt="{{$elements[1]->imagen}}">
					</div>
				</div>
				<div class="col-12 col-lg-6">
					<div class="bg-white p-3 px-5 h-100">
						<img class="w-50 py-3" src="{{ asset('img/design/logo.png') }}" alt="logo.png">
						<div class="">
							{!! $elements[0]->texto !!}
						</div>
					</div>
				</div>
			</div>

			<div class=" row text-center py-5">
				<div class="col-12 col-lg-4">
					<div class="h-75">
						<img src="{{ asset('img/photos/seccions/'.$elements[3]->imagen) }}" alt="{{$elements[3]->imagen}}" class="img-fluid">
					</div>
					<div class="bg-white w-50 mx-auto mt-1">
						<div class="py-3">{!! $elements[2]->texto !!}</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="h-75">
						<img src="{{ asset('img/photos/seccions/'.$elements[5]->imagen) }}" alt="{{$elements[5]->imagen}}" class="img-fluid">
					</div>
					<div class="bg-white w-50 mx-auto mt-1">
						<div class="py-3">{!! $elements[4]->texto !!}</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="h-75">
						<img src="{{ asset('img/photos/seccions/'.$elements[7]->imagen) }}" alt="{{$elements[7]->imagen}}" class="img-fluid">
					</div>
					<div class="bg-white w-50 mx-auto mt-1">
						<div class="py-3">{!! $elements[6]->texto !!}</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-imbo" style="background: #106bbc;">
		<div class="container">
			<div class="row text-center py-4">
				<div class="col-12 col-lg-4">
					<img src="{{ asset('img/photos/seccions/'.$elements[9]->imagen) }}" alt="{{ $elements[9]->imagen }}" class="img-fluid" style="border-radius:50%;">
				</div>
				<div class="col-12 col-lg-5 text-white fw-bolder d-flex align-items-center">
					{!! $elements[8]->texto !!}
				</div>
				<div class="col-12 col-lg-3 d-flex align-items-center justify-content-center">
					<a href="{{ route('front.contacto') }}" class="btn btn-primary btn-lg text-white w-75" style="background-color: #1e3d52;border-radius:.5em;">CONTACTO</a>
				</div>
			</div>
		</div>

	</section>
@endsection

@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
		});

	</script>
@endsection
