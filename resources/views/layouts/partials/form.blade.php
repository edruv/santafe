<div class="h1 text-center">
	SOLICITA TU COTIZACIÓN
</div>
<form action="{{ route('formularioContac')}}" method="post">
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
			<input type="text" name="mensaje" id="mensaje" placeholder="MENSAJE:" class="form-control bordeagenda">
		</div>
	</div>

	<div class="text-center mt-3 mb-3">
		<button type="submit" class="btn rounded-pill px-5 btn-santafe" >Enviar</button>
	</div>
</form>
