<header>
	{{-- <nav class="navbar navbar-expand-lg navbar-light" aria-label="Fifth navbar example"> --}}
	<nav class="navbar navbar-expand-md navbar-dark" aria-label="navbar">
		<div class="container">
			<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
				<img src="{{ asset('img/design/logo.png') }}" alt="" class="bi me-2" style="height:3em;">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExp" aria-controls="navbarExp" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarExp">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item mx-3">
						<button type="button" class="nav-link btn btn-link text-start text-white" data-bs-toggle="modal" data-bs-target="#empresarial">
							EVENTOS <br>
							EMPRESARIALES
						</button>
					</li>
					<li class="nav-item mx-3">
						<button type="button" class="nav-link btn btn-link text-start text-white" data-bs-toggle="modal" data-bs-target="#social">
							EVENTOS <br>
							SOCIALES
						</button>
					</li>
					<li class="nav-item mx-3">
						<button type="button" class="nav-link btn btn-link text-start text-white" data-bs-toggle="modal" data-bs-target="#musica">
							MUSICA <br>
							PARA EVENTOS
						</button>
					</li>
					<li class="nav-item mx-3">
						<button type="button" class="nav-link btn btn-link text-start text-white" data-bs-toggle="modal" data-bs-target="#recinto">
							RECINTOS <br>
							PARA EVENTOS
						</button>
					</li>
					<li class="nav-item mx-3">
						<div class="nav-link text-start text-white">
							Informacion
							<a class="nav-link p-0 text-white" href="tel:{{$config->whatsapp}}" style="text-decoration:none;">Tel: {{$config->whatsapp}}</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="modal fade" id="empresarial" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="empresarialLabel" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content bg-black">
				<div class="modal-header">
					<h5 class="modal-title text-white" id="empresarialLabel">EVENTOS EMPRESARIALES</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul class="list-unstyled ms-2">
						@foreach ($prods as $prod)
							@if ($prod->categoria == 1)
								<li>
									<a class="d-block text-uppercase fls-2" href="{{ route('front.empresarial',$prod->id) }}">{{$prod->nombre}}</a>
								</li>
							@endif
						@endforeach
					</ul>
				</div>
				{{-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary bg-santafe-sua" data-bs-dismiss="modal">Cerrar</button>
				</div> --}}
			</div>
		</div>
	</div>
	<div class="modal fade" id="social" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="socialLabel" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content bg-black">
				<div class="modal-header">
					<h5 class="modal-title text-white" id="socialLabel">EVENTOS SOCIALES</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul class="list-unstyled ms-2">
						@foreach ($prods as $prod)
							@if ($prod->categoria == 2)
								<li>
									<a class="d-block text-uppercase fls-2" href="{{ route('front.social',$prod->id) }}">{{$prod->nombre}}</a>
								</li>
							@endif
						@endforeach
					</ul>
				</div>
				{{-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary bg-santafe-sua" data-bs-dismiss="modal">Cerrar</button>
				</div> --}}
			</div>
		</div>
	</div>
	<div class="modal fade" id="musica" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="musicaLabel" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content bg-black">
				<div class="modal-header">
					<h5 class="modal-title text-white" id="musicaLabel">MUSICA PARA EVENTOS</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul class="list-unstyled ms-2">
						@foreach ($prods as $prod)
							@if ($prod->categoria == 3)
								<li>
									<a class="d-block text-uppercase fls-2" href="{{ route('front.musica',$prod->id) }}">{{$prod->nombre}}</a>
								</li>
							@endif
						@endforeach
					</ul>
				</div>
				{{-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary bg-santafe-sua" data-bs-dismiss="modal">Cerrar</button>
				</div> --}}
			</div>
		</div>
	</div>
	<div class="modal fade" id="recinto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="recintoLabel" aria-hidden="true">
		<div class="modal-dialog modal-fullscreen">
			<div class="modal-content bg-black">
				<div class="modal-header">
					<h5 class="modal-title text-white" id="recintoLabel">RECINTOS PARA EVENTOS</h5>
					<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<ul class="list-unstyled ms-2">
						@foreach ($prods as $prod)
							@if ($prod->categoria == 4)
								<li>
									<a class="d-block text-uppercase fls-2" href="{{ route('front.recinto',$prod->id) }}">{{$prod->nombre}}</a>
								</li>
							@endif
						@endforeach
					</ul>
				</div>
				{{-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary bg-santafe-sua" data-bs-dismiss="modal">Cerrar</button>
				</div> --}}
			</div>
		</div>
	</div>
</header>
