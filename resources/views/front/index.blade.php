@extends('layouts.front')

@section('title', 'Inicio')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	{{-- <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}"> --}}
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
@endsection
@section('styleExtras')
<style media="screen">
.owl-prev {
   display: none;
}
.disabled {
   display: none !important;
}
.carousel-control-next, .carousel-control-prev {
	width: 7.5%;
}

.carousel-caption{
	left: 7.5%;
	right: 7.5%;
}
.ytp-chrome-controls {
	margin: auto 8% !important;
}
.sli-carousel a, .sli-carouselTree a{
	color: #fff;
	text-decoration: none;
}
</style>
@endsection
@section('content')

	{{-- <section>
		<div id="" class="sli-carouselCero mx-auto">
			@foreach ($carrusel as $item)
				<div>

					@if ($item->image)
						<img src="{{ asset('img/photos/sliders/'.$item->image) }}" class="d-block w-100" alt="{{ $item->image }}">
						@if ($item->url)
								<div>
									<a href="{{$item->url}}" class="btn btn-lg w-25 btn-primary" style="background:#fff;border:2px #6E037A solid;color:#000">
										{{$item->titulo}}
									</a>
								</div>
						@endif
					@else
							<iframe class="" style="height:600px;" src="https://www.youtube.com/embed/{{$item->video['idVideo']}}?rel=0" allowfullscreen></iframe>
					@endif
				</div>
				@endforeach

		</div>
	</section> --}}
	<section>
		<div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				@foreach ($carrusel as $item)
					<div class="carousel-item @if ($loop->index == 0 ) active @endif">
						@if ($item->image)
							<img src="{{ asset('img/photos/sliders/'.$item->image) }}" class="d-block w-100" alt="{{ $item->image }}">
							@if ($item->url)
								<div class="carousel-caption d-none d-md-block text-start">
									<div>
										<a href="{{$item->url}}" class="btn btn-lg w-25 btn-primary" style="background:#fff;border:2px #6E037A solid;color:#000">
											{{$item->titulo}}
										</a>
									</div>
								</div>
								<div class="carousel-caption d-md-none">
									<div>
										<a href="{{$item->url}}" class="btn btn-sm w-100 btn-primary" style="background:#fff;border:2px #6E037A solid;color:#000">
											{{$item->titulo}}
										</a>
									</div>
								</div>
							@endif
						@else
							<div class="embed-responsive embed-responsive-21by9">
								<iframe class="d-block w-100" style="height:600px;" src="https://www.youtube.com/embed/{{$item->video['idVideo']}}?rel=0" allowfullscreen></iframe>
								</video>
							</div>
						@endif
					</div>
				@endforeach
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>
	<section class="container">
		<div class="row mx-auto py-4">
			<div class="col-12 col-md-5">
				<div id="" class="sli-carousel">
					@foreach ($desta as $dest)
						@if ($dest->categoria == 1 )
						<div class="card bg-black">
							@if (!empty($dest->photo->image))
								<a href="{{ route('front.empresarial',$dest->id)}}">
									<img src="{{ asset("img/photos/productos/".$dest->photo->image) }}" class="card-img-top img-fluid" alt="{{$dest->photo->image}}">
								</a>
							@else
								<a href="{{ route('front.empresarial',$dest->id)}}">
									<img src="{{ asset("img/design/camara.jpg") }}" class="card-img-top img-fluid" alt="{{$dest->nombre}}">
								</a>
							@endif
							<div class="card-body">
								<h5 class="card-title text-uppercase">
									<a href="{{ route('front.empresarial',$dest->id)}}">
										{{ $dest->nombre }}
									</a>
								</h5>
								<p class="card-text">
									{!! $dest->descripcion_rapida !!}
								</p>
							</div>
							<div class="d-flex justify-content-end px-0">
								<a href="{{ route('front.empresarial',$dest->id)}}" class="p-2 me-2 mb-2 text-dark" style="background-color: #fff;">
									<span class="p-2"> <i class="fas fa-chevron-right"></i> </span>
								</a>
							</div>
						</div>
						@endif
					@endforeach
				</div>
				<div class="my-1 d-flex justify-content-start align-items-center">
					<div>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<span class="fs-3 fw-bold ms-2">
						Empresarial
					</span>
				</div>
			</div>
			<div class="col-12 col-md-5">
				<div class="sli-carousel">
					@foreach ($desta as $dest)
						@if ($dest->categoria == 2 )
							<div class="card bg-black">
								@if (!empty($dest->photo->image))
									<a href="{{ route('front.social',$dest->id)}}">
										<img src="{{ asset("img/photos/productos/".$dest->photo->image) }}" class="card-img-top img-fluid" alt="{{$dest->photo->image}}">
									</a>
								@else
									<a href="{{ route('front.social',$dest->id)}}">
										<img src="{{ asset("img/design/camara.jpg") }}" class="card-img-top img-fluid" alt="{{$dest->nombre}}">
									</a>
								@endif
								<div class="card-body">
									<h5 class="card-title text-uppercase">
										<a href="{{ route('front.social',$dest->id)}}">
											{{ $dest->nombre }}
										</a>
									</h5>
									<p class="card-text">
										{!! $dest->descripcion_rapida !!}
									</p>
								</div>
								<div class="d-flex justify-content-end px-0">
									<a href="{{ route('front.social',$dest->id)}}" class="p-2 me-2 mb-2 text-dark" style="background-color: #fff;">
										<span class="p-2"> <i class="fas fa-chevron-right"></i> </span>
									</a>
								</div>
							</div>
						@endif
					@endforeach
				</div>
				<div class="my-1 d-flex justify-content-start align-items-center">
					<div>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<span class="fs-3 fw-bold ms-2">
						Social
					</span>
				</div>
			</div>
			<div class="col-12 col-md-2 fs-2 fw-bold  d-flex align-items-center">
				<div class="py-4">
					Organización <br>
					<span class="" style="color:#5E5B5C;">Para Eventos</span>
					<a href="{{ route('front.contact')}}" class="btn btn-santafe">Cotizar</a>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			@include('layouts.partials.form')

			<div class="py-3 fs-5 col-12 col-md-7 mx-auto">
				{!! $elements[0]->texto !!}
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row mx-auto py-4">
			<div class="col-12 col-md-2 fs-2 fw-bold  d-flex align-items-center">
				<div class="py-4">
					Música <br>
					<span class="" style="color:#5E5B5C;">Para Eventos</span>
					<a href="{{ route('front.contact')}}" class="btn btn-santafe">Cotizar</a>
				</div>
			</div>
			<div class="col-12 col-md-10">
				<div class="sli-carouselTree">
					@foreach ($desta as $dest)
						@if ($dest->categoria == 3 )
							<div class="px-1">
								<div class="card bg-black">
									@if (!empty($dest->photo->image))
										<a href="{{ route('front.musica',$dest->id)}}">
											<img src="{{ asset("img/photos/productos/".$dest->photo->image) }}" class="card-img-top img-fluid" alt="{{$dest->photo->image}}">
										</a>
									@else
										<a href="{{ route('front.musica',$dest->id)}}">
											<img src="{{ asset("img/design/camara.jpg") }}" class="card-img-top img-fluid" alt="{{$dest->nombre}}">
										</a>
									@endif
									<div class="card-body">
										<h5 class="card-title text-uppercase">
											<a href="{{ route('front.musica',$dest->id)}}">
												{{ $dest->nombre }}
											</a>
										</h5>
										<p class="card-text">
											{!! $dest->descripcion_rapida !!}
										</p>
									</div>
									<div class="d-flex justify-content-end px-0">
										<a href="{{ route('front.musica',$dest->id)}}" class="p-2 me-2 mb-2 text-dark" style="background-color: #fff;">
											<span class="p-2"> <i class="fas fa-chevron-right"></i> </span>
										</a>
									</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
				<div class="my-1 d-flex justify-content-start align-items-center">
					<div>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<span class="fs-3 fw-bold ms-2">
						Grupo Musical
					</span>
				</div>
			</div>
			{{-- <div class="col-12 col-md-5">
				<div class="card bg-black">
					<img src="{{ asset("img/photos/tmps/demo (2).png") }}" class="card-img-top img-fluid" alt="demo (2).png">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
					<div class="d-flex justify-content-end px-0">
						<a href="" class="p-2 me-2 mb-2 text-dark" style="background-color: #fff;">
							<span class="p-2"> <i class="fas fa-chevron-right"></i> </span>
						</a>
					</div>
				</div>
				<div class="my-1 d-flex justify-content-start align-items-center">
					<div>
						<span class="dot"></span>
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<span class="fs-3 fw-bold ms-2">
						DJ SANTAFE
					</span>
				</div>
			</div> --}}
		</div>
	</section>
	<section class="container d-none">
		<div class="py-3 fs-4 fw-bold">
			<span class="fs-1 fls-3">Recintos</span> <span class="" style="color:#5E5B5C;">Para Eventos</span>
		</div>
		<div class="">
			<div id="owl-carouseltwo" class="sli-carouseltwo">
				@foreach ($desta as $dest)
					@if ($dest->categoria == 4 )
						{{-- <div class="col-12 col-md recinto-card p-1"> --}}
						<div class=" recinto-card p-1">
							<div class="card border-0">
								@if (!empty($dest->photo->image))
									<a href="{{ route('front.recinto',$dest->id)}}">
										<img src="{{ asset("img/photos/productos/".$dest->photo->image) }}" class="card-img-top img-fluid" alt="{{$dest->photo->image}}">
									</a>
								@else
									<a href="{{ route('front.recinto',$dest->id)}}">
										<img src="{{ asset("img/design/camara.jpg") }}" class="card-img-top img-fluid" alt="{{$dest->nombre}}">
									</a>
								@endif
								<div class="card-body text-center">
									<a href="{{ route('front.recinto',$dest->id)}}" style="color:#000;text-decoration:none;">
										<h5 class="card-title text-uppercase">{{ $dest->nombre }}</h5>
									</a>
									<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
									<a href="{{ route('front.recinto',$dest->id)}}" style="color:#000;text-decoration:none;">
										<p class="card-text text-uppercase">
											{{ $dest->ciudad }}
										</p>
									</a>
								</div>
							</div>
						</div>
					@endif
				@endforeach
				{{-- <div class="col-12 col-md recinto-card p-1">
					<div class="card border-0">
						<img src="{{ asset("img/photos/tmps/demo (2).png") }}" class="card-img-top img-fluid" alt="demo (2).png">
						<div class="card-body text-center">
							<h5 class="card-title">Terraza</h5>
							<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
							<p class="card-text">
								Guadalajara
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md recinto-card p-1">
					<div class="card border-0">
						<img src="{{ asset("img/photos/tmps/demo (2).png") }}" class="card-img-top img-fluid" alt="demo (2).png">
						<div class="card-body text-center">
							<h5 class="card-title">Terraza</h5>
							<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
							<p class="card-text">
								Guadalajara
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md recinto-card p-1">
					<div class="card border-0">
						<img src="{{ asset("img/photos/tmps/demo (2).png") }}" class="card-img-top img-fluid" alt="demo (2).png">
						<div class="card-body text-center">
							<h5 class="card-title">Terraza</h5>
							<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
							<p class="card-text">
								Guadalajara
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md recinto-card p-1">
					<div class="card border-0">
						<img src="{{ asset("img/photos/tmps/demo (2).png") }}" class="card-img-top img-fluid" alt="demo (2).png">
						<div class="card-body text-center">
							<h5 class="card-title">Terraza</h5>
							<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
							<p class="card-text">
								Guadalajara
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md recinto-card p-1">
					<div class="card border-0">
						<img src="{{ asset("img/photos/tmps/demo (2).png") }}" class="card-img-top img-fluid" alt="demo (2).png">
						<div class="card-body text-center">
							<h5 class="card-title">Terraza</h5>
							<div style=" background:#000;padding:1px;width:50%;margin:auto"></div>
							<p class="card-text">
								Guadalajara
							</p>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
		<div class="my-3 d-flex justify-content-start align-items-center">
			<div>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
			</div>
			<a href="{{ route('front.recintos')}}" class="btn btn-santafe ms-3">VER MÁS</a>
		</div>
	</section>
@endsection

@section('jsLibExtras2')
	{{-- <script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/owlcarousel/owlCarousel2Rows.js') }}"></script> --}}
	<script src="{{ asset('vendor/slick/slick.js') }}"></script>
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
			$('.sli-carouselCero').slick();
			$('.sli-carousel').slick();
			$('.sli-carouseltwo').slick({
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 4,
				slidesToScroll: 4,
				responsive: [
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
				]
			});
			$('.sli-carouselTree').slick({
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 2,
				slidesToScroll: 2,
				responsive: [
			    {
			      breakpoint: 480,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
				]
			});

			// $("#owl-carouseltwo").owlCarousel({
			// 	loop:true,
			// 	margin:10,
			// 	nav:true,
			// 	responsive:{
			// 	    0:{
			// 	        items:1
			// 	    },
			// 	    600:{
			// 	        items:5
			// 	    },
			// 	    1000:{
			// 	        items:5
			// 	    }
			// 	}
			// });
			// $("#owl-carouseltwo").owlCarousel({
			// 	loop:false,
			// 	autoplay:false,
			// 	// autoplayTimeout:2000,
			// 	// margin:10,
			// 	responsiveClass:true,
			// 	responsive:{
			// 		0:{
			// 			items:1,
			// 		},
			// 		700:{
			// 			items:5,
			// 		},
			// 		1200:{
			// 			items:5,
			// 		}
			// 	},
			// 	nav: false,
			// 	// navText : ["<i class='text-white fa fa-chevron-left'></i><i class='text-white fa fa-chevron-left'></i>","<i class='text-white fa fa-chevron-right'></i><i class='text-white fa fa-chevron-right'></i>"],
			// 	// navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
			// });
		});
	</script>
@endsection
