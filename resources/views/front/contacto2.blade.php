@extends('layouts.front')

@section('title', 'Contacto')
{{-- @section('cssExtras')@endsection --}}
@section('styleExtras')
	<style media="screen">
	#formcontact .input-group .form-control {
		background: #000;
		border: 2px #6E037A solid;
		border-radius: 3em 0 0 3em;
		color: #fff;
	}
	#formcontact .input-group input::placeholder {
		color: #6E037A;
	}
	#formcontact .input-group input:focus {
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
	<section class="bg-black mb-4">
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
					<img src="{{ asset('img/design/logo.png') }}" alt="" class="img-fluid py-3">
					<div class="h5 text-santafe-sua text-uppercase py-2">mi registro aqui</div>
					<form action="" id="formcontact" class="col-12 col-md-11 mx-auto">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Nombre completo" aria-label="Nombre completo" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-user mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="telefono" aria-label="telefono" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-phone-alt mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-at mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="date" class="form-control" placeholder="Fecha de mi evento" aria-label="Fecha de mi evento" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-calendar mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Mi servicio de interes" aria-label="Mi servicio de interes" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-list mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Ubicacion de mi evento" aria-label="Ubicacion de mi evento" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-map-marker-alt mx-auto"></i>
							</span>
						</div>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Numero de invitados" aria-label="Numero de invitados" aria-describedby="basic-addon2">
							<span class="input-group-text" id="basic-addon2" name="basic-addon2" style="width:10%;">
								<i class="fa fa-users mx-auto"></i>
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
