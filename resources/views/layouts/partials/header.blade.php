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
					<li class="nav-item dropdown mx-md-3">
						<a class="nav-link dropdown-toggle text-start text-white" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">
							EMPRESARIALES
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown01">
							@foreach ($prods as $prod)
								@if ($prod->categoria == 1)
									<li><a class="dropdown-item text-uppercase" href="{{ route('front.empresarial',$prod->id) }}">{{$prod->nombre}}</a></li>
								@endif
							@endforeach
						</ul>
					</li>
					<li class="nav-item dropdown mx-md-3">
						<a class="nav-link dropdown-toggle text-start text-white" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false">
							SOCIALES
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown02">
							@foreach ($prods as $prod)
								@if ($prod->categoria == 2)
									<li><a class="dropdown-item text-uppercase" href="{{ route('front.social',$prod->id) }}">{{$prod->nombre}}</a></li>
								@endif
							@endforeach
						</ul>
					</li>
					<li class="nav-item dropdown mx-md-3 my-auto">
						<a class="nav-link dropdown-toggle text-start text-white" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">
							MUSICA
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							@foreach ($prods as $prod)
								@if ($prod->categoria == 3)
									<li><a class="dropdown-item text-uppercase" href="{{ route('front.musica',$prod->id) }}">{{$prod->nombre}}</a></li>
								@endif
							@endforeach
						</ul>
					</li>
					<li class="nav-item dropdown mx-md-3 my-auto d-none">
						<a class="nav-link dropdown-toggle text-start text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">
							RECINTOS
						</a>
						<ul class="dropdown-menu" aria-labelledby="dropdown04">
							@foreach ($prods as $prod)
								@if ($prod->categoria == 4)
									<li><a class="dropdown-item text-uppercase" href="{{ route('front.recinto',$prod->id) }}">{{$prod->nombre}}</a></li>
								@endif
							@endforeach
						</ul>
					</li>
					<li class="nav-item mx-md-3 my-auto">
						<div class="nav-link text-start text-white">
							<a class="nav-link p-0 text-white" href="tel:{{$config->whatsapp}}" style="text-decoration:none;">Tel: {{$config->whatsapp}}</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
