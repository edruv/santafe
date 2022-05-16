@extends('layouts.front')

@section('title')
{{-- {{ $product->nombre }} --}}
@endsection
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">
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

				<div class="col-12 col-md-4 p-2">
					<div class="text-center h-100 p-3 d-flex align-items-center" style="background:#ededed;">
						<div>
							<img src="{{ asset("img/photos/tmps/demo (1).png") }}" alt="" class="img-fluid rounded-circle my-3" style="width:5em;height:5em;">
							<div class="text-santafe-sua fw-bold py-2">
								Lorem ipsum dolor.
							</div>
							<div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, aspernatur totam culpa, consequatur laboriosam odio sint magni impedit suscipit modi neque saepe veniam reprehenderit veritatis. Unde ducimus et ea enim.</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md p-2">
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
			</div>
			<div class="pt-4">
				@include('layouts.partials.form')
			</div>
		</div>
	</div>
@endsection
@section('jsLibExtras2')
	<script src="{{ asset('js/owlcarousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/owlcarousel/owlCarousel2Rows.js') }}"></script>
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
			$("#carruselImg").owlCarousel({
				// loop:true,
				loop: false,
				rewind: true,
				margin:10,
				responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:1,
					},
					1000:{
						items:1,
					}
				}
			});
			$("#carrusel4").owlCarousel({
				// loop:true,
				loop: false,
				rewind: true,
				margin:10,
				responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					1000:{
						items:4,
					}
				}
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
