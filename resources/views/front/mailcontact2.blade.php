<html>
<head>
	<meta content="text/html;charset=UTF-8" http-equiv="Content-Type">
	<title>{{$data['asunto']}}</title>
</head>
<body style="margin:0;padding:0;background-color:#6E037A;">

	<div style="
		width:100%;
		height:300px;
		position:relative;
		overflow:hidden;
		margin-top:0;
		margin-bottom:0;
		">
		<img src="{{asset('img/design/night-party.jpg')}}" style=" width:100%; position:absolute; background-position: bottom; center;">
	</div>
	<div style="
		max-width:700px;
		width:100%;
		margin-top:0;
		margin-bottom:0;
		margin-right:auto;
		margin-left:auto;
		background-color:white;
		position:relative;
		">

		<!-- Asunto correo -->
		<div style="
			position:absolute;
			top:-100px;
			left:0;
			background-color:white;
			box-sizing: border-box;
			width:100%;
			height:100px;
			text-align:center;
			color:#333;
			font-size:25px;
			padding:20px;
			">
			{{$data['asunto']}}
		</div><!-- Asunto correo -->

		<!-- Cuerpo del correo -->
		<div style="
			box-sizing: border-box;
			width:100%;
			/* text-align:center; */
			color:#333;
			font-size:18px;
			padding:20px 40px;
			">
			<p>Nombre: <b> {{$data['nombre']}}</b></p>
			<p>Telefono: <b> {{$data['telefono']}}</b></p>
			<p>Email: <b> {{$data['email']}}</b></p>
			<p>Fecha de mi evento: <b> {{$data['fecha']}}</b></p>
			<p>Mi servicio de interes: <b> {{$data['servicio']}}</b></p>
			<p>Ubicacion de mi evento: <b> {{$data['ubicacion']}}</b></p>
			<p>Numero de invitados: <b> {{$data['numero']}}</b></p>
			<p>Notas: <b> {{$data['mensaje']}}</b></p>
		</div><!-- Cuerpo del correo -->

		<!-- Fecha -->
		<div style="
			position:absolute;
			bottom:-100px;
			left:0;
			background-color:white;
			box-sizing: border-box;
			width:100%;
			height:100px;
			text-align:center;
			color:#333;
			font-size:15px;
			padding:20px;
			">
			{{$data['hoy']}}
		</div><!-- Fecha -->

	</div>

	<div style="
		width:100%;
		background-color:#000;
		margin-top:0;
		margin-bottom:0;
		">
		<div style="
			padding-top:200px;
			padding-bottom:20px;
			padding-left:20px;
			padding-right:20px;
			text-align:center;
			color:white;
			">
			<a href="{{url('/')}}"><img src="{{asset('img/design/logo.png')}}" style="width: 200px;background:#6E037A;padding: 2px;border-radius: 5px;"></a>
			<br /><br />
			<a href="{{url('/')}}" style="color:white;">{{url('/')}}</a>
			<br /><br />
			Tel: {{$config->telefono}}
			<br /><br/>
			<a href="{{$config->instagram}}">
				<img src="https://img.icons8.com/color/64/000000/instagram-new.png">
			</a>
			<a href="{{$config->facebook}}">
				<img src="https://img.icons8.com/color/64/000000/facebook.png">
			</a>
		</div>
		<div style="padding:20px;">
			&nbsp;
		</div>
	</div>

</body>
</html>
