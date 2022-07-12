@extends('layouts.front')

@section('title', 'Contacto')
{{-- @section('cssExtras')@endsection --}}
@section('styleExtras')
	<style media="screen">
	#formcontact .input-group .form-control {
		/* background: #000; */
		border: 2px #6E037A solid;
		border-radius: 3em 0 0 3em;
		color: #6E037A;
	}
	#formcontact .input-group input::placeholder, #formcontact .input-group textarea::placeholder, #formcontact .input-group date::placeholder {
		color: #6E037A;
	}
	#formcontact .input-group input:focus, #formcontact .input-group textarea:focus {
		color: #fff;
	}
	#formcontact .input-group .input-group-text {
		width:10%;
		background: #fff;
		border-radius: 0 3em 3em 0;
		color: #6E037A;
	}
	#formcontact .input-group .input-group-text i{
		font-size: 1.3em;
	}
	</style>
@endsection
@section('content')
	<section class=" mb-4">
		<div class="container">
			<div class="row py-5">
				<div class="col-12 col-md-6 text-center">
					@if (!empty($elements[0]->imagen) )
						<img src="{{ asset("img/photos/seccions/".$elements[0]->imagen)}}" alt="{{$elements[0]->imagen}}" class="img-fluid rounded-circle w-75" style="object-fit:cover;">
					@else
						<img src="{{ asset("img/photos/tmps/demo 2.jpg")}}" alt="" class="img-fluid rounded-circle w-75" style="object-fit:cover;">
					@endif
					<div class="fs-5 py-4">
						{!! $elements[1]->texto !!}
					</div>
				</div>
				<div class="col-12 col-md-6 text-center">
					<img src="{{ asset('img/design/logo w.jpg') }}" alt="logo w.jpg" class="img-fluid py-3 w-50">
					<div class="h5 text-santafe-sua text-uppercase py-2">mi registro aqui</div>
					<form action="{{ route('mailcontactTwo')}}" id="formcontact" class="col-12 col-md-11 mx-auto" method="post">
						@csrf
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Nombre completo" aria-label="Nombre completo">
							<span class="input-group-text" id="Nombre completo" name="nombre" style="width:10%;">
								<i class="fa fa-user mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Telefono" aria-label="telefono">
							<span class="input-group-text" id="telefono" name="telefono" style="width:10%;">
								<i class="fa fa-phone-alt mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email" aria-label="Email">
							<span class="input-group-text" id="Email" name="email" style="width:10%;">
								<i class="fa fa-at mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="date" class="form-control" placeholder="Fecha de mi evento" aria-label="Fecha de mi evento">
							<span class="input-group-text" id="Fecha de mi evento" name="fecha" style="width:10%;">
								<i class="fa fa-calendar mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Mi servicio de interes" aria-label="Mi servicio de interes">
							<span class="input-group-text" id="Mi servicio de interes" name="servicio" style="width:10%;">
								<i class="fa fa-list mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Ubicacion de mi evento" aria-label="Ubicacion de mi evento">
							<span class="input-group-text" id="Ubicacion de mi evento" name="ubicacion" style="width:10%;">
								<i class="fa fa-map-marker-alt mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Numero de invitados" aria-label="Numero de invitados">
							<span class="input-group-text" id="Numero de invitados" name="numero" style="width:10%;">
								<i class="fa fa-users mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<textarea class="form-control" name="" id=""  rows="2" class="" style="resize:none;" placeholder="Notas..."></textarea>
							<span class="input-group-text" id="message" name="mensaje" style="width:10%;">
								<i class="fa fa-comment-alt mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="submit" value="Enviar" class="btn btn-santafe mx-auto w-50">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
	</script>
@endsection
