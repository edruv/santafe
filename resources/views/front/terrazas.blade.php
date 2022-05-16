@extends('layouts.front')

@section('title')
{{-- {{ $product->nombre }} --}}
@endsection
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}"> --}}
	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
@endsection
@section('cssExtras')
	<style media="screen">
	#formsearch input{
		border: 2px #6E037A solid;
		border-radius: 2em 0 0 2em;
	}
	#formsearch button{

		border: 2px #6E037A solid;
		border-radius: 0 2em 2em 0;
		color: #fff;
	  background-color: #6E037A;
	  border-color: #6E037A;
	  /* width: 10em; */
		padding: 0 2em;
	}
	</style>
@endsection
@section('content')
	<div class="container">
		<div class="h1 fls-5 text-uppercase text-center py-3 fw-bold">
			salones y terrazas
		</div>
		<div>
			<form action="{{ route('front.recintos') }}" method="get" id="formsearch" class="col-12 col-md-8 mx-auto">
				{{-- @csrf --}}
				<div class="input-group mb-3">
					<input type="text" class="form-control" name="search">
					<button class="btn btn-outline-secondary" type="submit" id="button-addon2">Buscar</button>
				</div>
			</form>
		</div>
		<div class="row">
			@foreach ($recintos as $recinto)
				<div class="col-12 col-md-3">
					<div class="card ">
						@if (!empty($recinto->photo->image))
							<a href="{{ route('front.recinto',$recinto->id)}}">
								<img src="{{ asset("img/photos/productos/".$recinto->photo->image) }}" class="card-img-top img-fluid" alt="{{$recinto->photo->image}}">
							</a>
						@else
							<a href="{{ route('front.recinto',$recinto->id)}}">
								<img src="{{ asset("img/design/camara.jpg") }}" class="card-img-top img-fluid" alt="{{$recinto->nombre}}">
							</a>
						@endif
						<div class="card-body text-center">
							<a href="{{ route('front.recinto',$recinto->id)}}" style="color:#000;text-decoration:none;">
								<h5 class="card-title text-uppercase">{{ $recinto->nombre }}</h5>
							</a>
							<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
							<a href="{{ route('front.recinto',$recinto->id)}}" style="color:#000;text-decoration:none;">
								<p class="card-text text-uppercase">
									{{ $recinto->ciudad }}
								</p>
							</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endsection
@section('jsLibExtras2')
	{{-- <script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('js/owlcarousel/owlCarousel2Rows.js') }}"></script> --}}
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
		});
	</script>
@endsection
