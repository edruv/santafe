@extends('layouts.front')

@section('title')
{{-- {{ $product->nombre }} --}}
@endsection
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
@endsection
@section('cssExtras')
	<style media="screen">
	</style>
@endsection
@section('content')

	<div class="bg-main">
		<div class="container">
			<div class="text-center py-5">
				{{-- <div class="h1 text-santafe-sua fw-bold text-uppercase">text</div> --}}
				@if ($product->portada)
					<img src="{{ asset('img/photos/productos/'.$product->portada) }}" alt="{{$product->portada}}" class="img-fluid" style="width:200px;">
				@else
					<div class="h1 text-santafe-sua fw-bold text-uppercase">
						{{$product->nombre}}
					</div>
				@endif
				<div class="h5 fw-bold text-uppercase">
					{{ $product->categoria->nombre }}
				</div>
				<div class="col-12 col-md-10 mx-auto">
					{!! $product->descripcion_rapida !!}
				</div>
			</div>
			<div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-inner">
					@foreach ($product->gallery as $gal)
						<div class="carousel-item @if ($loop->first) active @endif">
							<img src="{{ asset('img/photos/productos/'.$gal->image) }}" class="d-block w-100" alt="{{ $gal->image }}">
						</div>
					@endforeach
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<div class="row">
				<div class="col-12 col-md-4 p-2 order-1 order-sm-0">
					<div id="carouselSecondary" class="carousel slide" data-bs-ride="carousel">
						<div class="carousel-inner">
							@foreach ($product->gallery2 as $gal)
								<div class="carousel-item @if ($loop->first) active @endif">
									<img src="{{ asset('img/photos/productos/'.$gal->image) }}" class="d-block w-100" alt="{{ $gal->image }}">
								</div>
							@endforeach
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselSecondary" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselSecondary" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>

				<div class="col-12 col-md-8 p-2">
					<div class="bg-black text-white">
						<div class="p-3">
							{!! $product->descripcion !!}
							<hr style="opacity:1;">
							<div class="d-flex justify-content-between">
								<div></div>
								<div>
									@if (!empty($product->pdf))
										<a href="{{ asset("img/photos/productos/".$product->pdf) }}" target="_blank"><i class="fas fa-file-download fa-2x text-white"></i></a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div>
			{{-- </div>
			<div class="row"> --}}
				<div class="col-12 col-md-4 p-2 order-2 order-sm-1">
					<div id="carruselTesti" class="text-center h-100 p-3 d-flex align-items-center" style="background:#ededed;">
						@foreach ($testimonios as $testi)
							<div>
								@if ($testi->portada)
									<img src="{{ asset("img/photos/testimonios/".$testi->portada) }}" alt="" class="img-fluid rounded-circle my-3 mx-auto" style="width:5em;height:5em;">
								@endif
								<div class="text-santafe-sua fw-bold py-2">
									{{ $testi->nombre }}
								</div>
								<div class="">
									{!! $testi->descripcion !!}
								</div>
							</div>
						@endforeach
					</div>
				</div>

				{{-- <div class="col-12 col-md p-2">
					<div class="bg-black text-white">
						<div class="p-3">
							{!! $product->descripcion !!}
							<hr style="opacity:1;">
							<div class="d-flex justify-content-between">
								<div></div>
								<div>
									@if (!empty($product->pdf))
										<a href="{{ asset("img/photos/productos/".$product->pdf) }}" target="_blank"><i class="fas fa-file-download fa-2x text-white"></i></a>
									@endif
								</div>
							</div>
						</div>
					</div>
				</div> --}}

				<div class="col-12 col-md-8 p-2 order-1 order-sm-2" id="recomend">
					@foreach ($productos_rel as $rel)
						@php
						switch ($rel->categoria) {
							case '1':
								$routeUrl = "front.empresarial";
							break;
							case '2':
								$routeUrl = "front.social";
							break;
							case '3':
								$routeUrl = "front.musica";
							break;
							case '4':
								$routeUrl = "front.recinto";
							break;
						}
						@endphp
						<div class="card bg-black">
							@if (!empty($rel->photo))
								<a href="{{ route($routeUrl,$rel->id)}}">
									<img src="{{ asset("img/photos/productos/".$rel->photo) }}" class="card-img-top img-fluid" alt="{{$rel->photo}}">
								</a>
							@else
								<a href="{{ route($routeUrl,$rel->id)}}">
									<img src="{{ asset("img/design/camara.jpg") }}" class="card-img-top img-fluid" alt="{{$rel->nombre}}">
								</a>
							@endif
							<div class="card-body">
								<h5 class="card-title text-uppercase">
									<a href="{{ route($routeUrl,$rel->id)}}" style="color:#fff;text-decoration:none;">
										{{ $rel->nombre }}
									</a>
								</h5>
								<p class="card-text">
									{!! $rel->descripcion_rapida !!}
								</p>
							</div>
							<div class="d-flex justify-content-end px-0">
								<a href="{{ route($routeUrl,$rel->id)}}" class="p-2 me-2 mb-2 text-dark" style="background-color: #fff;">
									<span class="p-2"> <i class="fas fa-chevron-right"></i> </span>
								</a>
							</div>
						</div>
					@endforeach
				</div>
			</div>

			<div class="pt-4">
				@include('layouts.partials.form')
			</div>
		</div>
	</div>
@endsection
@section('jsLibExtras2')
	<script src="{{ asset('vendor/slick/slick.js') }}"></script>
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#carruselTesti').slick({
				dots: true,
				infinite: false,
				speed: 300,
				slidesToShow: 1,
				slidesToScroll: 1
			});
			$('#recomend').slick({
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
			$(".medidas-select").change(function(){
				var formatter = new Intl.NumberFormat('en-US', {
													style: 'currency',
													currency: 'USD',
												});

				var sku = $(this).val();
				// var price = $(this).attr('price');
				var price = $(this).find(':selected').attr('price');
				var descuento = $(this).find(':selected').attr('disc');
				var descripcion = $(this).find(':selected').attr('descripcion');
				// $(".addtocart").removeClass("disabled");
				$('.addtocart').removeAttr("disabled");

				if(sku == 0){
					// $(".addtocart").addClass("disabled");
					$(".addtocart").attr("disabled", true);
					$("#variantdescript").text('');
					$('#desctdiv').hide();
				}
				$(".addtocart").attr("data-key",sku);
				$("#variantdescript").html(descripcion);

				if (descuento) {
					price = parseFloat(price);
					descuento = parseInt(descuento);
					var pridesc = price - (price * descuento)/100 ;
					console.log(price);
					console.log(descuento);
					console.log(pridesc);

					pridesc = formatter.format(pridesc);
					price = formatter.format(price);
					$("#desctdiv").show();
					$("#desct").text(price);
					$("#pricev").text(pridesc);
				}else{
					price = formatter.format(price);
					$("#desctdiv").hide();

					$("#pricev").text(price);
				}

			});

		});
	</script>
@endsection
