<footer class="">
	<div class="container" style="">
		<div class="row py-4 text-white">
			<div class="col-12 col-lg-4">
				<p class="">NAVEGACION</p>
				<div class="w-100 mb-3" style="background:#fff;height:5px;"></div>
				<ul class="list-unstyled ms-3">
					<li><a href="{{ route('front.index') }}">INICIO</a></li>
					<li><a href="{{ route('front.contacto') }}">CONTACTO</a></li>
				</ul>
			</div>
			<div class="col-12 col-lg-4">
				<p class="">SOCIAL</p>
				<div class="w-100 mb-3" style="background:#fff;height:5px;"></div>
				<ul class="list-unstyled ms-3">
					<li><a href="{{ route('front.contacto') }}">CONTACTO</a></li>
					<li><a href="{{ route('front.faqs') }}">FAQ</a></li>
					<li><a href="{{ route('front.aviso') }}">AVISO DE PRIVACIDAD</a></li>
					<li><a href="{{ route('front.contact') }}">COTIZACION</a></li>
				</ul>
			</div>
			<div class="col-12 col-lg-4">
				<p class="">SANTA FE SUA</p>
				<div class="w-100 mb-3" style="background:#fff;height:5px;"></div>
				<ul class="list-unstyled ms-3">
					<li>
						Tel:
						<a href="tel:{{$config->whatsapp}}">{{$config->whatsapp}}</a>
					</li>
					<li>
						Oficina:
						<a href="tel:{{$config->telefono}}">{{$config->telefono}}</a>
					</li>
					<li>
						{{ $config->direccion }}
					</li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg text-center text-md-start py-2">
				<a href="{{ route('front.index') }}">
					<img src="{{ asset('img/design/logo.png') }}" alt="logo.png" class="w-50">
				</a>
			</div>
			<div class="col-12 col-lg py-2">
				<div class="text-center text-md-end">
					<a href="https://wa.me/52{{ $config->whatsapp }}"><i class="mx-1 fab fa-whatsapp" style="font-size:1.5em;"></i></a>
					<a href="{{$config->instagram}}"><i class="mx-1 fab fa-instagram" style="font-size:1.5em;"></i></a>
					<a href="{{$config->facebook}}"><i class="mx-1 fab fa-facebook" style="font-size:1.5em;"></i></a>
				</div>
			</div>
		</div>
	</div>
	<div id="wozial">
		<div class="container">
			<div class="text-center text-uppercase py-3 text-white">
				SANTA FE SUA &copy; Todos los derechos reservados. Desarrollado por <a href="https://wozial.com/" target="_blank" class="">Wozial Marketing Lovers</a>.
			</div>
		</div>
	</div>
</footer>
