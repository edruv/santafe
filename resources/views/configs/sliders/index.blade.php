@extends('layouts.admin')

@section('cssExtras')
	<link rel="stylesheet" href="{{asset('css/dropify.css')}}">
@endsection
@section('styleExtras')
<style>
	.card-img-top{
		max-height: 200px;
		object-fit: cover;
	}
</style>
@endsection
@section('content')
	<div class="row mb-2 px-2">
		<a href="{{ url()->previous() }}" class="col col-md-2 btn btn-sm grey darken-2 text-white mr-auto"><i class="fa fa-reply"></i> Regresar</a>
		<?php // NOTE: arreglar back ?>
	</div>
	<div class="row">
		<div class="col-12 col-lg-6 p-2">
			<div class="card h-100">
				<form action="{{ route('config.slider.store') }}" class="card-body mb-0" method="post" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="imagen" value="1">

					<h5 class="card-title text-center">Agregar imagen</h5>
					<div class="form-group">
						<label for="name">Imagen</label>
						<input type="file" id="slider" name="slider" class="dropify"  data-weight="7em" data-height="7em" required />
						<div class="text-center">
							<small class="text-muted">Dimensiones sugeridas: 1080 x 500 px</small>
						</div>
					</div>
					<div class="form-group text-center">
						<button class="btn btn-sm btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-12 col-lg-6 p-2">
			<div class="card h-100">
					<form action="{{ route('config.slider.store') }}" class="card-body" method="post" enctype="multipart/form-data">
					@csrf
					<h5 class="card-title text-center">Agregar Video</h5>
					<div class="form-group">
						<label for="video"></label>
						<input type="text" name="video" id="video" class="form-control">
					</div>
					<div class="form-group text-center">
						<button class="btn btn-primary">Guardar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="row mt-3 sortable" data-table="Carrusel">
		@foreach ($sliders as $slide)
			<div class="col-12 col-md-4 col-lg-4 my-2 my-md-1 p-2" data-card="{{$slide->id}}">
				<div class="card h-100 p-2">
					<div class="d-flex justify-content-end">
						<button class="btn btn-sm bg-danger position-absolute text-center text-white" type="button" data-toggle="modal" data-target="#frameModalDel" data-id="{{$slide->id}}" style="z-index: 2;">
							<i class="fa fa-trash-alt "></i>
						</button>
						{{-- <a href="" class="bg-danger position-absolute text-center text-white m-2 m-md-1 delslide" style="width:25px;height: auto;border-radius:50%;">
							<i class="fa fa-trash-alt p-1"></i>
						</a> --}}
					</div>
					@if ($slide->image)
					<a href="{{ asset('img/photos/sliders/'.$slide->image)}}" target="_blank">
						<img src="{{ asset('img/photos/sliders/'.$slide->image)}}" class="card-img-top" alt="{{$slide->image}}">
					</a>
					<div class="card-body p-2">
						<div class="text-center mb-1">
							<small><label class="mb-0" for="titulo">Boton</label></small>
							<input type="text" name="titulo" id="titulo" class="form-control form-control-sm editarajax" data-id="{{$slide->id}}" data-table="carrusel" data-campo="titulo"  value="{{ $slide->titulo }}">
						</div>
						<div class="text-center mb-1">
							<small><label class="mb-0" for="url">URL</label></small>
							<input type="text" name="url" id="url" class="form-control form-control-sm editarajax" data-id="{{$slide->id}}" data-table="carrusel" data-campo="url"  value="{{ $slide->url }}">
						</div>
					</div>
					<div class="text-center mb-1">
						<small><label class="mb-0" for="subtitulo">Texto</label></small>
						<textarea class="form-control form-control-sm editarajax" name="subtitulo" id="subtitulo" rows="2" data-id="{{$slide->id}}" data-table="carrusel" data-campo="subtitulo">{{ $slide->subtitulo }}</textarea>
						{{-- <input type="text" name="subtitulo" id="subtitulo" class="form-control form-control-sm editarajax" data-id="{{$slide->id}}" data-table="carrusel" data-campo="subtitulo"  value="{{ $slide->subtitulo }}"> --}}
					</div>
					@else
					<a href="{{$slide->video['url']}}" target="_blank">
						<div class="card-img-top">
							<img src="/img/design/play.png" class="position-absolute card-img-top" alt="">
							<img src="https://img.youtube.com/vi/{{$slide->video['idVideo']}}/0.jpg" class="card-img-top" alt="https://img.youtube.com/vi/{{$slide->video['idVideo']}}/0.jpg">
						</div>
					</a>
					@endif

				</div>
			</div>
		@endforeach
	</div>

<div class="modal fade bottom" id="frameModalDel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-frame modal-top" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<div class="row d-flex justify-content-center align-items-center">
					<p class="pt-3 pr-2">
						Eliminar Slider?
					</p>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn red darken-3 text-white delslide">Eliminar</button>
					<form id="colordel" action="{{ route('config.slider.delete') }}" method="POST" style="display: none;">
							@csrf
							 @method('delete')
							<input type="hidden" id="isdel" name="slide" value="">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('jsLibExtras2')
<script src="{{asset('js/dropify.js')}}" charset="utf-8"></script>

@endsection
@section('jqueryExtra')
<script type="text/javascript">
		$(document).ready(function() {
			$('.dropify').dropify();

			$('.fa-trash-alt').parent().click(function(e) {
				var id = $(this).attr('data-id');
				$("#isdel").val(id);
			});

			$('.delslide').click(function(e) {
				$('#colordel').submit();
			});

		});
		tinymce.init({
			selector: 'textarea',
			// plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
			// toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
			menubar: false,
			plugins: [
				'advlist autolink lists link image charmap print preview anchor',
				'searchreplace visualblocks code fullscreen',
				'insertdatetime media table paste code help wordcount',
				'advlist autolink lists link image charmap print preview anchor wordcount',

				'searchreplace visualblocks code fullscreen table visualblocks',
				'insertdatetime media table contextmenu paste code imagetools',
				'textcolor colorpicker'
			],
			// toolbar: 'undo redo | formatselect | ' +
			// 'bold italic backcolor | alignleft aligncenter ' +
			// 'alignright alignjustify | bullist numlist outdent indent | ' +
			// 'removeformat | help',
			toolbar: 'forecolor backcolor | insert table | undo redo | removeformat styleselect |  bold italic underline |  alignleft aligncenter alignright alignjustify |  bullist numlist | outdent indent | link image | code visualblocks',
			resize: false,
			content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
			body_class : "editarajax"
	 });
	</script>
@endsection
