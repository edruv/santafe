@extends('layouts.front')

@section('title', 'Mantenimiento')
@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/index.css')}}">
	<link rel="stylesheet" href="{{asset('css/nosotros.css')}}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">
@endsection
@section('styleExtras')
	<style media="screen">
		.butsub{
			background: #ffd401;
			color: black;
		}
		.bg-capaci{
			background: url('{{ asset('img/design/fondo-capacitacion.png') }}');
			background-size: cover;
			background-position-y: center;
		}

		.bg-slash-gray{
			background: url('{{ asset('img/design/fondo-industriales.png') }}');
			background-size: cover;
		}
		.bg-slash-black{
			background: url('{{ asset('img/design/fondo-mantenimiento.png') }}');
			background-size: cover;
		}
		.bg-slash-yellow{
			background: url('{{ asset('img/design/fondo-nosotros.png') }}');
			background-size: cover;
		}

		@media (max-width: 992px){
			.bg-capaci{
				background-size: 0 0;
			}
		}
	</style>
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 mx-auto">
				<div class="d-flex justify-content-center mt-4 p-2 titles">SERVICIOS</div>
				<div class="text-conocenos" style="color:#000!important;font-size:16px"> {!!$elements[0]->texto!!} </div>
			</div>
		</div>
	</div>
	<div class="m-p-0">
		<div class="col-12 text-center" style="background-color: black; color: white; padding: 1em;font-size: 1.5em;">
			<div class="d-flex justify-content-center titles">DAMOS MANTENIMIENTO</div>
		</div>
	</div>
	<div class="m-p-0" style="background-color:#f5f5f5; border:solid #f5f5f5;">

		<!-- Modal======================================================= -->
		<!-- Modal -->
		<div class="modal fade" role="dialog" id="carrusel1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" >
					<div class="modal-header p-3 m-0" style="background-color:#000; color:#fff">
						<h5> Servicio: <span class="modal-title" id="exampleModalLabel" style="font-weight:800"></span> </h5>
						<button type="button" class="close p-1" data-dismiss="modal" aria-label="Close" style="background-color:#fff;width: 40px;height:40px">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-5">
						<div class="center-y-x p-3">
							<img class="modal-imagen img-fluid" src="" style="max-height:100%">
						</div>
						<div class="modal-texto p-3"> </div>

						<div class="modal-footer" style="font-weight:600">
							Contactanos via:&nbsp;&nbsp;
							<a class="btn btn-dark m-1 p-1 pr-5 pl-5" target="_BLANK" style="background-color:#000" href="mailto:{{$config->destinatario}}">
								<i class="fas fa-envelope-open-text"></i> &nbsp;&nbsp; E - Mail &nbsp;&nbsp;</a>
							<a class="btn btn-dark m-1 p-1 pr-5 pl-5" target="_BLANK" style="background-color:#000" href="https://wa.me/52{{$config->telefono2}}?text=Me%20gustaría%20saber%20...">
								<i class="fab fa-whatsapp"></i> &nbsp;&nbsp; Whatsapp &nbsp;&nbsp;</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div>
		<div id="carServicos" class="owl-carousel owl-theme m-0 p-5" style="padding-bottom:0!important">
			@foreach ($carrusel1 as $carru1)
			<div class="p-5" id="cards_landscape_wrap-2" data-slide-index="{{$carru1->id}}" style="padding-bottom:0!important">
				<a class="btnmodalcarrusel1"
	                        	data-toggle="modal"
	                        	data-target="#carrusel1Modal"
	                        	data-id= "{{ $carru1->id }}"
	                        	data-titulo="{{$carru1->titulo}}"
	                        	data-imagen="{{ asset('img/photos/sliders/'.$carru1->image) }}"
	                        	data-texto="{{ $carru1->descripcion }}" >
										<div class="card-flyer p-2">
												<div class="text-box">
														<div class="image-box">
																<img class="col-12" src="{{ asset('img/photos/sliders/'.$carru1->image) }}" alt=""
																style="position:relative;z-index:1" / >
																<button class="col-12"
																style="position:absolute;z-index:2;bottom:50px" > MÁS DETALLES</button>
														</div>
														<div class="text-container p-2">
																<h6>{{$carru1->titulo}}</h6>
														</div>

												</div>
										</div>
								</a>
			</div>
			@endforeach
		</div>
	</div>


	<section class="m-p-0">
		<div class="bg-capaci">
			<div class="row mx-auto">
				<div class="col-12 col-lg-5 order-1 order-lg-0">
					<img src="{{ asset('img/design/personal-capacitado.png') }}" alt="" class="img-fluid">
				</div>
				<div class="col-12 col-lg-7 order-0 order-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start text-center text-lg-left my-3">
					<div>
						<h3 class="capacitacion-h3">CAPACITACIÓN</h3>
						<div class="capacitacion-p py-3"> {!!$elements[5]->texto!!} </div>
						<a href="{{ route('front.contacto','#contacto') }}"
						style="padding: .6em 1em;border: none; background-color: black; color: white; font-size: 1.2em; font-weight: bold;">
							Saber más
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal======================================================= -->
	<!-- Modal -->
	<div class="modal fade" role="dialog"  id="carrusel4Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header p-3 m-0" style="background-color:#000; color:#fff">
					<h5> Servicio: <span class="modal-title" id="exampleModalLabel" style="font-weight:800"></span> </h5>
					<button type="button" class="close p-1" data-dismiss="modal" aria-label="Close" style="background-color:#fff;width: 40px;height:40px">
				  		<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body p-5">
					<div class="center-y-x p-3">
						<img class="modal-imagen img-fluid" src="" style="max-height:100%">
					</div>
					<div class="modal-texto p-3" style="font-weight:600"> </div>
					<div class="modal-footer" style="font-weight:600">
						Contactanos via:&nbsp;&nbsp;
						<a class="btn btn-dark m-1 p-1 pr-5 pl-5"
							target="_BLANK"
							style="background-color:#000"
							href="mailto:{{$config->destinatario}}">
							<i class="fas fa-envelope-open-text"></i> &nbsp;&nbsp; E - Mail &nbsp;&nbsp;</a>
						<a class="btn btn-dark m-1 p-1 pr-5 pl-5"
							target="_BLANK"
							style="background-color:#000"
							href="https://wa.me/52{{$config->telefono2}}?text=Me%20gustaría%20saber%20...">
							<i class="fab fa-whatsapp"></i> &nbsp;&nbsp; Whatsapp &nbsp;&nbsp;</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="">
		<div class="m-p-0">
			<div class="col-12 text-center" style="background-color: black; color: white; padding: 1em;font-size: 1.5em;">
				<div class="d-flex justify-content-center titles">SERVICIO DE MONTAJE DE LLANTAS INDUSTRIALES</div>
			</div>
		</div>
		<div class="row mx-auto">
			<div class="col-12 col-lg-8 order-1 order-lg-0 bg-slash-gray">
				<div class="d-flex justify-content-center titles p-2">SERVICIO DE MONTAJE</div>
				<div class="row ">
					<div id="carrusel4" class=" owl-carousel owl-theme m-0 p-3" >
						@foreach ($carrusel2 as $carru2)
						<div class="m-0 pt-0 pb-0 pr-3 pl-3 text-center">
							<div class="center-y-x" style="height:200px;">
								<img class="" src="{{ asset('img/photos/sliders/'.$carru2->image) }}" alt=""
								style="max-height:100%">
							</div>
							<p class="m-0 p-0 center-y-x" style="font-size:16px; font-weight:600;line-height:1;height:40px; overflow:hidden;" >{{$carru2->titulo}} </p>
													<button class="py-2 px-5 btn  btnmodalcarrusel4"
													data-toggle="modal"
													data-target="#carrusel4Modal"
													data-id= "{{ $carru2->id }}"
													data-titulo="{{$carru2->titulo}}"
													data-imagen="{{ asset('img/photos/sliders/'.$carru2->image) }}"
													data-texto="{{ $carru2->descripcion }}"
													style="background-color:#000;color:#fff">MÁS DETALLES</button>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-4 px-0 order-0 order-lg-1">
				<img src="{{ asset('img/photos/seccions/'.$elements[1]->imagen ) }}" alt="" class="img-fluid">
			</div>
		</div>
	</div>
	<div class="">
		<div class="row mx-auto bg-slash-black">
			<div class="col-12 col-lg-5">
				<img src="{{ asset('img/photos/seccions/'.$elements[2]->imagen) }}" alt="" class="img-fluid py-3">
			</div>
			<div class="col-12 col-lg-7 d-flex align-items-center justify-content-center text-center text-lg-left my-3">
				<div class="">
					<h3 style="font-size: 1.8em; color: white; font-weight: 800; text-align: center;">DESECHO DE LLANTAS</h3>
					<div style="font-size: 1.2em; color: white;"> {!!$elements[6]->texto!!} </div>
					<div class="d-flex justify-content-center">
						<a href="{{ route('front.contacto','#contacto') }}" style="background-color:#fff;color:#000;padding: .5em 1em; border: 0;">SABER MÁS</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal======================================================= -->
	<!-- Modal -->
	<div class="modal fade" role="dialog"  id="carrusel5Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" >
				<div class="modal-header p-3 m-0" style="background-color:#000; color:#fff">
					<h5> Servicio: <span class="modal-title" id="exampleModalLabel" style="font-weight:800"></span> </h5>
					<button type="button" class="close p-1" data-dismiss="modal" aria-label="Close" style="background-color:#fff;width: 40px;height:40px">
				  		<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body p-5">
					<div class="center-y-x p-3">
						<img class="modal-imagen img-fluid" src="" style="max-height:100%">
					</div>
					<div class="modal-texto p-3"> </div>

					<div class="modal-footer" style="font-weight:600">
						Contactanos via:&nbsp;&nbsp;
						<a class="btn btn-dark m-1 p-1 pr-5 pl-5"
							target="_BLANK"
							style="background-color:#000"
							href="mailto:{{$config->destinatario}}">
							<i class="fas fa-envelope-open-text"></i> &nbsp;&nbsp; E - Mail &nbsp;&nbsp;</a>
						<a class="btn btn-dark m-1 p-1 pr-5 pl-5"
							target="_BLANK"
							style="background-color:#000"
							href="https://wa.me/52{{$config->telefono2}}?text=Me%20gustaría%20saber%20...">
							<i class="fab fa-whatsapp"></i> &nbsp;&nbsp; Whatsapp &nbsp;&nbsp;</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="">
		<?php // TODO: cambiar por carrucel ?>
		<div class="m-p-0">
			<div class="col-12 text-center" style="background-color: black; color: white; padding: 1em;font-size: 1.5em;">
				<div class="d-flex justify-content-center titles">SERVICIOS PARA BATERIAS INDUSTRIALES.</div>
			</div>
		</div>
		<div class="row mx-auto">
			<div class="col-12 col-lg-8 order-1 order-lg-0 bg-slash-yellow">
				<div class="row py-5">
					<div id="carrusel5" class=" owl-carousel owl-theme  mb-3 mt-3 pt-0 pb-0 pr-5 pl-5" >
						@foreach ($carrusel3 as $carru3)
						<div class="m-0 pt-0 pb-0 pr-3 pl-3 text-center">
							<div class="center-y-x" style="height:200px;">
								<img class="" src="{{ asset('img/photos/sliders/'.$carru3->image) }}" alt=""
								style="max-height:100%">
							</div>
							<p class="m-0 p-0 center-y-x" style="font-size:16px; font-weight:600;line-height:1;height:40px; overflow:hidden;" >{{$carru3->titulo}} </p>
													<button class="btnmodalcarrusel5 "
													data-toggle="modal"
													data-target="#carrusel5Modal"
													data-id= "{{ $carru3->id }}"
													data-titulo="{{$carru3->titulo}}"
													data-imagen="{{ asset('img/photos/sliders/'.$carru3->image) }}"
													data-texto="{{ $carru3->descripcion }}"
													style="background-color:transparent;border:1px solid #000;color:#000;font-weight:800;padding:.5em;border-radius:.35em"> VER MÁS</button>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<img src="{{ asset('img/photos/seccions/'.$elements[3]->imagen) }}" alt="" class="col-12 col-lg-4 px-0 order-0 order-lg-1">
			{{-- <div class="col-12 col-lg-4 px-0 order-0 order-lg-1">
				<img src="{{ asset('img/photos/tmps/baterias-Servicios.png') }}" alt="" class="img-fluid">
			</div> --}}
		</div>
	</div>

	<!-- Modal======================================================= -->
	<!-- Modal -->
	<div class="modal fade" role="dialog"  id="carrusel6Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content" >
				<div class="modal-header p-3 m-0" style="background-color:#000; color:#fff">
					<h5> Servicio: <span class="modal-title" id="exampleModalLabel" style="font-weight:800"></span> </h5>
					<button type="button" class="close p-1" data-dismiss="modal" aria-label="Close" style="background-color:#fff;width: 40px;height:40px">
				  		<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body p-5">
					<div class="center-y-x p-3">
						<img class="modal-imagen img-fluid" src="" style="max-height:100%">
					</div>
					<div class="modal-texto p-3"> </div>

					<div class="modal-footer" style="font-weight:600">
						Contactanos via:&nbsp;&nbsp;
						<a class="btn btn-dark m-1 p-1 pr-5 pl-5"
							target="_BLANK"
							style="background-color:#000"
							href="mailto:{{$config->destinatario}}">
							<i class="fas fa-envelope-open-text"></i> &nbsp;&nbsp; E - Mail &nbsp;&nbsp;</a>
						<a class="btn btn-dark m-1 p-1 pr-5 pl-5"
							target="_BLANK"
							style="background-color:#000"
							href="https://wa.me/52{{$config->telefono2}}?text=Me%20gustaría%20saber%20...">
							<i class="fab fa-whatsapp"></i> &nbsp;&nbsp; Whatsapp &nbsp;&nbsp;</a>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="">
		<?php // TODO: cambiar por carrucel ?>
		<div class="m-p-0">
			<div class="col-12 text-center" style="background-color: black; color: white; padding: 1em;font-size: 1.5em;">
				<div class="d-flex justify-content-center titles"> DIAGNÓSTICO </div>
			</div>
		</div>
		<div class="row mx-auto">
			<img src="{{ asset('img/photos/seccions/'.$elements[4]->imagen) }}" alt="" class="col-12 col-lg-4 px-0" style="object-fit: cover;">
			<div class="col-12 col-lg-8 bg-slash-yellow">
				<div class="row py-5">
					<div id="carrusel6" class=" owl-carousel owl-theme mb-3 mt-3 pt-0 pb-0 pr-5 pl-5" >
						@foreach ($carrusel4 as $carru4)
						<div class="m-0 pt-0 pb-0 pr-5 pl-5 text-center">
							<div class="center-y-x" style="height:240px;">
								<img class="" src="{{ asset('img/photos/sliders/'.$carru4->image) }}" alt=""
								style="max-height:100%">
							</div>
							<p class="m-0 p-0 center-y-x" style="font-size:16px; font-weight:600;line-height:1;height:40px; overflow:hidden;" >{{$carru4->titulo}} </p>
								<button class="w-75 btn py-2 btnmodalcarrusel6"
								data-toggle="modal"
								data-target="#carrusel6Modal"
								data-id= "{{ $carru4->id }}"
								data-titulo="{{$carru4->titulo}}"
								data-imagen="{{ asset('img/photos/sliders/'.$carru4->image) }}"
								data-texto="{{ $carru4->descripcion }}"
								style="background-color:#000;color:#fff">VER DETALLE</button>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			{{-- <div class="col-12 col-lg-4 px-0 order-0 order-lg-1">
				<img src="{{ asset('img/photos/tmps/baterias-Servicios.png') }}" alt="" class="img-fluid">
			</div> --}}
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
			$("#carrusel1Modal").on("show.bs.modal", function(event) {
			    var button = $(event.relatedTarget);
			    var modal = $(this);
			    modal.find(".modal-title").text(button.data("titulo"));
			    modal.find(".modal-imagen").attr("src",button.data("imagen"));
			    modal.find(".modal-texto").text(button.data("texto"));
			});

			$("#carServicos").owlCarousel({
				loop:true,
				autoplay:false,
				// autoplayTimeout:2000,
				// margin:10,
				responsiveClass:true,
				responsive:{
					// 0:{
					// 	items:1,
					// },
					700:{
						items:1,
					},
					1200:{
						items:4,
					},
					1500:{
						items:5,
					}
				},
				nav: true,
				navText : ["<i class='text-white fa fa-chevron-left'></i><i class='text-white fa fa-chevron-left'></i>","<i class='text-white fa fa-chevron-right'></i><i class='text-white fa fa-chevron-right'></i>"],
				navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
			});



			$("#carrusel4Modal").on("show.bs.modal", function(event) {
			    var button = $(event.relatedTarget);
			    var modal = $(this);
			    modal.find(".modal-title").text(button.data("titulo"));
			    modal.find(".modal-imagen").attr("src",button.data("imagen"));
			    modal.find(".modal-texto").text(button.data("texto"));
			});

			$("#carrusel4").owlCarousel({
				loop:true,
				autoplay:false,
				responsiveClass:true,
				autoWidth:true,
				responsive:{
					// 0:{
					// 	items:1,
					// },
					600:{
						items:1,
					},
					1200:{
						items:2,
					},
					1500:{
						items:3,
					}
				},
			});



			$("#carrusel5Modal").on("show.bs.modal", function(event) {
			    var button = $(event.relatedTarget);
			    var modal = $(this);
			    modal.find(".modal-title").text(button.data("titulo"));
			    modal.find(".modal-imagen").attr("src",button.data("imagen"));
			    modal.find(".modal-texto").text(button.data("texto"));
			});

			$("#carrusel5").owlCarousel({
				loop:true,
				autoplay:true,
				responsiveClass:true,
				nav: false,
				responsive:{
					// 0:{
					// 	items:1,
					// },
					600:{
						items:1,
					},
					1200:{
						items:3,
					},
					1500:{
						items:3,
					}
				},
			});



			$("#carrusel6Modal").on("show.bs.modal", function(event) {
			    var button = $(event.relatedTarget);
			    var modal = $(this);
			    modal.find(".modal-title").text(button.data("titulo"));
			    modal.find(".modal-imagen").attr("src",button.data("imagen"));
			    modal.find(".modal-texto").text(button.data("texto"));
			});

			$("#carrusel6").owlCarousel({
				loop:true,
				autoplay:true,
				responsiveClass:false,
				nav: false,
				responsive:{
					// 0:{
					// 	items:1,
					// },
					600:{
						items:1,
					},
					1200:{
						items:2,
					},
					1500:{
						items:2,
					}
				},
			});
		});
	</script>
@endsection
