@extends('layouts.admin')

@section('cssExtras')
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
	<style media="screen">
		.cat{
			font-size: 1.3em;
		}
	</style>
	<div class="row mb-4 px-2">
		<a href="{{ route('productos.index') }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
	</div>
	<div class="col-12  mx-auto">
		<div class="card">
			<div class="card-body">
				<form action="{{route('productos.store')}}" method="post">
					@csrf
					<div class="row text-center">
						{{-- <div class="col-md">
							<label for="clave">SKU</label>
							<input type="text" name="clave" id="clave" class="form-control" value="{{ old('clave') }}" required>
						</div> --}}
						<div class="col-md form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
						</div>
					{{-- </div>
					<div class="form-group row text-center"> --}}

						<div class="col-md form-group">
							<label for="categoria">Categoria</label>
							<select name="categoria" id="categoria" class="custom-select">
								<option disabled selected>Seleccionar Categoria</option>
										@foreach ($categs as $cat)
												<option value="{{$cat->id}}">{{ $cat->nombre }}</option>
										@endforeach
							</select>
						</div>
					</div>
					<div class="form-group text-center">
						<label for="descripcion_rapida">Descripción rapida</label>
						<textarea name="descripcion_rapida" id="descripcion_rapida" rows="4" class="texteditor form-control" style="resize:none;">{{old('descripcion_rapida')}}</textarea>
					</div>
					<div class="form-group text-center">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" id="descripcion" rows="10" class="texteditor form-control" style="resize:none;">{{old('descripcion')}}</textarea>
					</div>
					<div class="col-md form-group">
						<label for="ciudad">Ciudad</label>
						<input type="text" name="ciudad" id="ciudad" class="form-control" value="{{ old('ciudad') }}">
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

@endsection
@section('jsLibExtras2')
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#ciudad').parent().hide();

			$("#categoria").change(function(e) {
				// var inf = $(this).find(':selected').attr('data-parent');
				var inf = $(this).val();
				if (inf == 4) {
					$('#ciudad').parent().show();
				}else {
					$('#ciudad').parent().hide();
				}
			});
		});
	</script>
@endsection
