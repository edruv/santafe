@extends('layouts.admin')

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">

@endsection
@section('styleExtras')
	<style>
</style>
@endsection
@section('jsLibExtras')
@endsection

@section('content')
	<div class="row mb-4 px-2">
		<a href="{{ route('productos.show', $testi->producto) }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
		{{-- <a href="{{ route('productos.edit',$testi->id) }}" class="col col-md-2 btn btn-sm blue darken-2 text-white"><i class="fa fa-pen"></i> Editar</a> --}}
	</div>
	<div class="row">
		<div class="col-12 col-lg-6 my-2">
			<div class="card">
				<div class="card-body">
					<div>
						<span class="font-weight-bold">Nombre:</span> <span>{{$testi->nombre}} </span>
					</div>
					<div class="form-group">
						<span class="font-weight-bold">Descripción:</span>
						<div class="">{!! $testi->descripcion !!}</div>
					</div>
					{{-- <div class="form-group">
					</div> --}}
				</div>
			</div>
		</div>
		{{-- <div class="col-12 col-lg-6 my-2">
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<span class="font-weight-bold">Meta-Title <i class="fas fa-info-circle" data-toggle="tooltip" title="Este titulo aparecerá debajo del título y la URL de tu página tal como aparece en los resultados del motor de búsqueda"></i>:</span>
						<input type="text" class="form-control editarajax" id="metaTitle" name="metaTitle" data-id="{{$testi->id}}" data-table="configuracion" data-campo="metaTitle"  value="{{ $testi->metaTitle }}">

					</div>
					<div class="mb-3">
						<span class="font-weight-bold">Meta-descripción <i class="fas fa-info-circle" data-toggle="tooltip" title="Esta descripción aparecerá debajo del título y la URL de tu página tal como aparece en los resultados del motor de búsqueda"></i>:</span>
						<textarea class="form-control editarajax" id="metaDescripcion" name="metaDescripcion" rows="3" data-id="{{$testi->id}}" data-table="producto" data-campo="metaDescripcion"  style="resize:none;">{{ $testi->metaDescripcion }}</textarea>
					</div>
				</div>
			</div>
		</div> --}}
		<div class="col-12 col-lg-6 my-2">
			<div class="">
				<div class="card mt-3">
					<div class="card-header text-center">Portada</div>
					{{-- @if (!empty($testi->portada))
						<div class="py-2 text-center">
							<a href="{{ asset('img/photos/testimonios/'.$testi->portada) }}" target="_blank" class="btn btn-primary w-25">Ver</a>
						</div>
					@endif --}}
					<form action="{{ route('productos.testimonio.updateimg',$testi->id) }}" id="fphoto" class="card-body text-center" method="post" enctype="multipart/form-data">
						@csrf
						@method('put')
						<input type="hidden" name="producto" value="{{$testi->id}}">
						<input type="hidden" name="type" value="portada">
						<input type="file" name="portada" id="portada" class="dropify" @if ($testi->portada) data-default-file="{{ asset('img/photos/testimonios/'.$testi->portada) }}" @endif data-allowed-file-extensions="jpg jpeg png">
						<input type="submit" value="Guardar" class="btn btn-primary mt-2">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bottom" id="ModalDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-frame modal-top" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row d-flex justify-content-center align-items-center">
						<p class="pt-3 pr-2">
							Eliminar foto?
						</p>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						<button type="button" class="btn red darken-3 text-white delphoto">Eliminar</button>
						<form id="photodel" action="{{ route('productos.pic.delete') }}" method="POST" style="display: none;">
								@csrf
								 @method('delete')
								<input type="hidden" id="ipdel" name="photo" value="">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
@section('jsLibExtras2')
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="{{asset('js/jquery-file-upload.js')}}"></script>
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$(document).ready(function(){

			$('.select2').select2();
			var drEvent = $('.dropify').dropify({

			// $('.dropify').dropify({
				messages: {
					'default': 'Arrastrar y soltar un archivo aquí o hacer clic',
					'replace': 'Arrastrar y soltar o hacer clic para reemplazar',
					'remove': 'Remover',
					'error': 'Ooops, algo malo pasó.'
				},
				error: {
	        'fileSize': 'El tamaño del archivo es demasiado grande (@{{ value }} máximo)',
	        'minWidth': 'El ancho de la imagen es demasiado pequeño (@{{ value }}}px min).',
	        'maxWidth': 'El ancho de la imagen es demasiado grande (@{{ value }}}px máximo).',
	        'minHeight': 'La altura de la imagen es demasiado pequeña (@{{ value }}}px min).',
	        'maxHeight': 'La altura de la imagen es demasiado grande (@{{ value }}px max).',
	        'imageFormat': 'El formato de la imagen no está permitido (@{{ value }} solamente).'
				}
			});

			$('.fa-trash-alt').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#ipdel").val(id);
			});

			$('.delphoto').click(function(e) {
				$('#photodel').submit();
			});

			$("#fileuploader").uploadFile({
				url:"{{ route('productos.pic.store', $testi->id ) }}",
				multiple: true,
				maxFileCount:10,
				fileName:"uploadedfile",
				allowedTypes: "jpg,jpeg,png",
				maxFileSize: 10485760,
				showFileCounter: false,
				showDelete: "false",
				showPreview:false,
				showQueueDiv:true,
				returnType:"json",
				formData: {
					"_token": $("meta[name='csrf-token']").attr("content"),
					"producto": {{ $testi->id }},
					"galeria": 1
				},
				onSuccess:function(files,data,xhr){
					location.reload();
				}
			});
			$("#fileuploader2").uploadFile({
				url:"{{ route('productos.pic.store', $testi->id ) }}",
				multiple: true,
				maxFileCount:10,
				fileName:"uploadedfile",
				allowedTypes: "jpg,jpeg,png",
				maxFileSize: 10485760,
				showFileCounter: false,
				showDelete: "false",
				showPreview:false,
				showQueueDiv:true,
				returnType:"json",
				formData: {
					"_token": $("meta[name='csrf-token']").attr("content"),
					"producto": {{ $testi->id }},
					"galeria": 2
				},
				onSuccess:function(files,data,xhr){
					location.reload();
				}
			});
		});
	</script>
@endsection
