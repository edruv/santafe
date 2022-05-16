@extends('layouts.front')

@section('title')
{{ $product->nombre }}
@endsection
@section('styleExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">
@endsection
@section('cssExtras')
	<style media="screen">
		.ft{
			margin: auto 10em;
			padding: .5em 2em;
		}

		.fondoProductosRelacionados{
		    background-image: url('{{ asset('img/design/fondo-proveedores.png')}}');
		    background-repeat: no-repeat;
		    background-size: cover;
		}
		.contactanos-detalle{
		    background-image: url('{{ asset('img/design/fondo-proveedores.png')}}');
		    background-repeat: no-repeat;
		    background-size: cover;
		}
		.medidas-select{
			background-color: #e7e7e7;
			color: #000000;
			font-size: 14px;
			margin: 20px;
			width: 80%;
			height: 50px;
			font-weight: 700;
			border-radius: 0;
			border: none;
		}
		.medidas-select:focus{
			background-color: #e7e7e7;
			color: #000000;
			font-size: 14px;
			font-weight: 700;
		}

		@media (max-width: 992px){
			.ft{
				margin: auto;
			}
		}
	</style>
@endsection
@section('content')

	<section style="background-color: #e7e7e7;padding-top:3em;">
		<div class="container">
			<div class="row">
				{{-- <div class="col-12 py-3 py-lg-0 col-lg-4">
					<div class="p-2 bg-white">
						<div class="text-center">
							<img class="img-fluid" src="{{asset('img/photos/productos/'.$product->gallery[0]->image) }}" alt="">
						</div>
					</div>
				</div> --}}
				<div class="col-12 col-md-4 p-2 m-0">
					<div id="carruselImg" class="owl-carousel owl-theme mb-3 mt-3 p-0">
						@if ($product->gallery->count())
							@foreach ($product->gallery as $gal)
								<div class="slide1" data-slide-index="{{$gal->id}}">
									<div class="p-5 center-y-x bg-white" style="height:320px">
										<img src="{{ asset('img/photos/productos/'.$gal->image) }}" alt="{{$gal->image}}" style="max-height:100%">
									</div>
								</div>
							@endforeach
						@else
							<div class="slide1">
								<div class="p-5 center-y-x bg-white" style="height:320px">
									<img class="img-fluid" src="{{ asset('img/design/logoFooter.png') }}" alt="logoFooter.png" style="max-height:100%;width:auto">
								</div>
							</div>
						@endif
					</div>
				</div>
				<div class="col-12 col-md-8 m-0 p-2">
					<div class=" mb-3 mt-3 p-0 bg-white" style="min-height:320px">
						<h3 class="text-left m-0 p-5" style="font-size: 30px;font-weight: 600;padding-bottom:0!important">
							{{$product->categoria->nombre}}
						</h3>
						<div class="row p-2 m-0">
							<div class="col-12 col-md-6 center-y-x text-center m-0 p-3">
								<label for="cantidad m-0 p-0" style="font-size:1.8em; font-weight:100;padding-top:4px">Cantidad:</label>
								<input type="number" name="cantidad" id="cantidad" value="1" class="text-center w-25 m-0 p-0 center-y-x" style="background-color: #e7e7e7; border: none;height:2em;font-size:1.8em; ">
							</div>
							<div class="col-12 col-md-6 text-left m-0 pt-0 pb-0 pl-3 pr-3">
								<p class="m-0 p-0" style="font-size: 1.5em; font-weight: 700; ">
									<span id="pricev" style="font-size:1.8em; font-weight: 700; ">${{$product->precio}}</span> c/u
									<span id="desctdiv" style="display: none; font-size:1em; font-weight: 700; color:rgba(255, 0, 0, 0.6)">
										<br>
										<del>&nbsp; <span id="desct">{{$product->precio}}</span> c/u &nbsp;</del>
									</span>
								</p>
							</div>
						</div>
						<div class="row p-2 m-0">
							<div class="col-12 col-md-6 d-flex justify-content-center m-0 p-3">
							   <select class="form-control medidas-select  m-0 p-0">
							      <option value="0" price="{{ $product->precio }}">SELECCIONA UNO ..</option>
							      @foreach ($variantes as $variante)
							       	<option value="{{$variante->id}}" price="{{ $variante->precio }}" disc="{{ $variante->descuento }}" descripcion="{{ $variante->descripcion }}">{{$variante->modelo}}</option>
							      @endforeach
							    </select>
							</div>
							<div class="col-12 col-md-6 m-0 p-3">
								<button class="col-12 col-md-8 btn bg-black text-white addtocart"
								style="background: black;padding: 12px;" disabled data-key="{{$product->id}}">Comprar</button>
							</div>
						</div>
						<div class="text-center text-muted m-0 p-2">
							<p class="text-muted">
								<small>
									El precio puede variar de acuerdo a las caracteristicas y cantidad de productos seleccionados
								</small>
							</p>
							{{-- <p style="color:#000">El precio puede variar de acuerdo a las caracteristicas y cantidad de productos seleccionados</p> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="background-color: #e7e7e7;padding:2em;">
		<div class="container">
			<div class="col-12 px-0">
				<div class="card">
					<div class="card-body">
						<div class="px-3">
							<p class="text-justify" style="font-size: .9em; padding: 1em 1em 0 1em;">
								{!! $product->descripcion !!}
							</p>
							<p id="variantdescript" class="text-justify" style="padding: 1em 0;">
							</p>
						</div>
						@if ($product->pdf)
							<div class="d-flex justify-content-center justify-content-lg-end">
								<a class="bg-black text-white px-5 my-3 ft" href="" >Ficha Tecnica</a>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
	@if ($productos_rel->count())
		<section>
			<div class="container-fluid" style="border: solid black 1px; background-color: black; color: white;">
				<div class="row">
					<div class="col-12 d-flex justify-content-center p-3">
						<p style="margin: 0; font-size: 2em;">Productos Relacionados</p>
					</div>
				</div>
			</div>

			<div class="row m-0" style="background-color: #e7e7e7; border-bottom: solid black 1em;">
				<div class="col-10 mx-auto">
					<div id="carrusel4" class="fondo-carrousel owl-carousel owl-theme mb-3 mt-3">
						@foreach ($productos_rel as $rel)
							<div class="slide1" data-slide-index="{{$rel->id}}">
								<div class="py-3" >
									@if ($rel->photo && file_exists(asset('img/photos/productos/'.$rel->photo)))
										<a href="">
											<img src="{{ asset('img/photos/productos/'.$rel->photo) }}" alt="{{$rel->photo}}">
										</a>
									@else
										{{-- <img src="{{ asset('img/photos/productos/llanta.png') }}" alt="{{$rel->image}}"> --}}
										<a href="">
											<img class="" src="{{ asset('img/design/logoFooter.png') }}" alt="logoFooter.png">
										</a>
									@endif
								</div>
								<p style="text-align: center; font-weight: bold; margin: .1em;">{{$rel->info->nombre}}</p>
								<div style="text-align: center; padding: .5em;">
									{{-- <a href="" style="padding: .6em; background-color: #434343; color: white;">Ficha Tecnica</a> --}}
									<a href="" style="padding: .6em; background-color: #000000; color: white;">Comprar</a>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</section>
		@else
		<section>
			<div class="container-fluid" style="border: solid black 1px; background-color: black; color: white;">
				<div class="row">
					<div class="col-12 d-flex justify-content-center p-3" style="height:5em;">
					</div>
				</div>
			</div>
		</section>
	@endif

	<section class="container-fluid contactanos-detalle">
		<div class="row">
		<div class="col-12 col-md-8 mx-auto p-5">
			<p class="d-flex justify-content-center pt-5" style="font-size: 1.5em; font-weight: bold;">¿NO ENCUENTRAS LO QUE NECESITAS?</p>
			<div class="d-flex justify-content-center" style="font-size: 1.4em;">
				{!! $elements[0]->texto !!}
			</div>

			<div class="row pt-5 pb-5">
				<form class="row" action="{{ route('formularioPieza') }}" method="post" >
					@csrf
					<div class="col-12 col-md-6">
						<p class="text-center" style="font-weight: bold;">Datos de la pieza</p>
						<div class="row">
							<div class="col-12 pb-2">
							<input type="text" class="form-control" name="nombreP" placeholder="Nombre Pieza" style="border:solid 2px #000">
							</div>
							<div class="col-12 pb-2">
							<input type="text" class="form-control" name="serieP" placeholder="Serie Pieza" style="border:solid 2px #000">
							</div>
							<div class="col-12 pb-2">
							<input type="text" class="form-control" name="motorP" placeholder="Serie Motor" style="border:solid 2px #000">
							</div>
							<div class="col-12 pb-2">
							<input type="text" class="form-control" name="marca" placeholder="Marca" style="border:solid 2px #000">
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						<p class="text-center" style="font-weight: bold;">Datos personales</p>
							<div class="row">
								<div class="col-12 pb-2">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" style="border:solid 2px #000">
								</div>
								<div class="col-12 pb-2">
									<input type="text" class="form-control" name="telefono" placeholder="Telefono" style="border:solid 2px #000">
								</div>
								<div class="col-12 pb-2">
									<input type="text" class="form-control" name="correo" placeholder="Correo" style="border:solid 2px #000">
								</div>
								<div class="col-12 pb-2">
									<input type="text" class="form-control" name="direccion" placeholder="Direccion" style="border:solid 2px #000">
								</div>
								</div>
						</div>
					<button class="mx-auto mt-4 w-50 p-2" style="border:none; background-color: black; color: white; font-weight: bold;">Enviar</button>
				</form>
			</div>
		</div>
		</div>
	</section>

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
