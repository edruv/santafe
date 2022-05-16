@extends('layouts.front')

@section('title', 'Contacto')
{{-- @section('cssExtras')@endsection --}}
@section('styleExtras')
	<style media="screen">
	.btn-whatsapp{
		background: #25d366 !important;
		color: #fff;
		font-size: 1.5em;
		border: 4px #eeeeee solid;
		border-radius: .5em;
	}
	#mapa iframe{
		height: 400px;
		width: 100%;
	}
	.form-group {
  margin-bottom: .5rem;
}

.form-inline .form-control {
  display: inline-block;
  width: auto;
  vertical-align: middle;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

label {
  margin-bottom: 0.5rem;
}
	</style>
@endsection
@section('content')
	<div class="bg-main">
		<div class="container">
			<div class="text-center py-5">
				<div class="h1 text-santafe-sua fw-bold text-uppercase fls-5">ayuda?</div>
				{{-- <div class="h5 fw-bold text-uppercase">categ</div> --}}
				<div class="col-12 col-md-8 mx-auto">
					{!! $elements[0]->texto !!}
				</div>
			</div>
			<div class="">
				<form action="" method="post">
					@csrf
					<div class="row d-flex justify-content-center mx-auto py-3">
						<div class="col-12 col-md ">
							<input type="text" name="nombre" id="nombre" placeholder="NOMBRE:" class="form-control bordeagenda">
						</div>
						<div class="col-12 col-md">
							<input type="email" name="correo" id="correo" placeholder="CORREO:" class="form-control bordeagenda">
						</div>
						<div class="col-12 col-md">
							<input type="tel" name="telefono" id="telefono" placeholder="WHATSAPP:" class="form-control bordeagenda">
						</div>
						<div class="col-12 col-md">
							<input type="text" name="evento" id="evento" placeholder="EVENTO:" class="form-control bordeagenda">
						</div>
						<div class="col-12 py-3">
							<textarea name="mensaje" id="mensaje" placeholder="MENSAJE:" class="form-control bordeagenda" rows="5" style="resize:none;"></textarea>
						</div>
					</div>

					<div class="text-center mt-3 mb-3">
						<button type="submit" class="btn rounded-pill px-5 btn-santafe" >Enviar</button>
					</div>
				</form>
			</div>
			<div class="py-5">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="bg-black p-3">
							<div class="h1 text-center fw-bold fls-5">HOLA!</div>
							<div class="text-center py-3">
								{!! $elements[1]->texto !!}
							</div>
							<hr style="opacity:1;">
							<div class="text-end">
								<ul class="list-unstyled ms-3">
									<li>
										Tel:
										<a href="tel:{{$config->whatsapp}}" style="color:#fff; text-decoration:none;">{{$config->whatsapp}}</a>
									</li>
									<li>
										Oficina:
										<a href="tel:{{$config->telefono}}" style="color:#fff; text-decoration:none;">{{$config->telefono}}</a>
									</li>
									<li>
										{!! nl2br ($config->direccion) !!}
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6">
						{!! $config->mapa !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
	</script>
@endsection
