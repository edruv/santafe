@extends('layouts.front')

@section('title') {{$politica->titulo}} @endsection
{{-- @section('cssExtras')@endsection --}}
{{-- @section('styleExtras')@endsection --}}
@section('content')
	<section>
		<div class="bg-global">
			<div class="col-12 p-4  text-center" style="background-color: black; color: white;">
				<div class="" style="font-size:24px;color: white;"> {{ $politica->titulo }} </div>
			</div>
		</div>
	</section>
	<div class="container"  style="min-height:55vh">
		<div class="my-4 p-5" style="background:url(img/photos/nosotros/bg-contacto.png);/* background-repeat: no-repeat; */background-position: center;">
			<div class="col-12 col-md-10 p-4 mx-auto bg-white" style="border: .5em solid rgba(110, 3, 122,.6);border-radius:5px;">
				{!! $politica->descripcion !!}
			</div>
		</div>
	</div>
@endsection

@section('jsLibExtras2')
@endsection
@section('jqueryExtra')
	<script type="text/javascript">
		$('iframe').attr('width', '100%');
		$('iframe').attr('height', '460');

		// window.onload = function() {
		//
		// };
		//
		// $(document).ready(function() {
		// });

	</script>
@endsection
