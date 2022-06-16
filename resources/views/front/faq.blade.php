@extends('layouts.front')

@section('title', 'FAQS')
@section('cssExtras')
	<style media="screen">
	</style>
@endsection
{{-- @section('jsLibExtras')@endsection --}}


@section('content')
	{{-- <div class="row mx-auto">
		<div class="col-12 px-0">
			<img src="{{ asset('img/photos/seccions/'.$elements[1]->imagen) }}" alt="{{$elements[1]->imagen}}" class="img-fluid" style="height:400px;object-fit:cover;width: fit-content;">
		</div>
	</div> --}}
	{{-- @foreach ($elements as $el)
		{{$loop->index}} - {{$el}} <br>
	@endforeach --}}
	<section class=" py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 fs-3 d-flex justify-content-center align-items-center">
					<span class="px-3">
						Preguntas Frecuentes
					</span>
				</div>
				{{-- <div class="col-12 col-md-8 text-golden">
					<div>
						{!! $elements[1]->texto !!}
					</div>
				</div> --}}
			</div>
		</div>

	</section>
	<section class="">
		<div class="container py-5">
			<div class="accordion accordion-flush" id="accordionFaqs">
				@foreach ($faqs as $f)
					<div class="accordion-item my-3">
						<h2 class="accordion-header border" id="flush-heading{{$f->id}}">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$f->id}}" aria-expanded="false" aria-controls="flush-collapse{{$f->id}}">
								{{ $f->pregunta }}
							</button>
						</h2>
						<div id="flush-collapse{{$f->id}}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{$f->id}}" data-bs-parent="#accordionFaqs">
							<div class="accordion-body">
								{!! $f->respuesta !!}
							</div>
						</div>
					</div>
				@endforeach
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
