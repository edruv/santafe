<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Orden de pago #{{$pedido->id}}</title>

	<style>
		.invoice-box {
			/* max-width: 800px; */
			margin: auto;
			/* padding: .5em; */
			/* border: 1px solid #eee;
			box-shadow: 0 0 10px rgba(0, 0, 0, .15); */
			font-size: 16px;
			line-height: 24px;
			font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			color: #555;
		}

		.invoice-box table {
			width: 100%;
			line-height: inherit;
			text-align: left;
		}

		.invoice-box table td {
			padding: 5px;
			vertical-align: top;
		}

		.invoice-box table tr td:nth-child(2) {
			text-align: right;
		}

		.invoice-box table tr.top table td {
			padding-bottom: 20px;
		}

		.invoice-box table tr.top table td.title {
			font-size: 45px;
			line-height: 45px;
			color: #333;
		}

		.invoice-box table tr.information table td {
			padding-bottom: 40px;
		}

		.invoice-box table tr.heading td {
			background: #eee;
			border-bottom: 1px solid #ddd;
			font-weight: bold;
		}

		.invoice-box table tr.details td {
			padding-bottom: 20px;
		}

		.invoice-box table tr.item td {
			border-bottom: 1px solid #eee;
		}

		.invoice-box table tr.item.last td {
			border-bottom: none;
		}

		.invoice-box table tr.total td:nth-child(2) {
			border-top: 2px solid #eee;
			font-weight: bold;
		}

		@mediaonly screen and (max-width: 600px) {
			.invoice-box table tr.top table td {
				width: 100%;
				display: block;
				text-align: center;
			}

			.invoice-box table tr.information table td {
				width: 100%;
				display: block;
				text-align: center;
			}
		}

		/** RTL **/
		.rtl {
			direction: rtl;
			font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
		}

		.rtl table {
			text-align: right;
		}

		.rtl table tr td:nth-child(2) {
			text-align: left;
		}
		.text-capitalize {
			text-transform: lowercase;
			text-transform: capitalize;
		}
		.text-uppercase {
			text-transform: uppercase;
		}
	</style>
</head>

<body>
	<div class="invoice-box">
		<table cellpadding="0" cellspacing="0">
			<tr class="top">
				<td colspan="4">
					<table>
						<tr>
							<td class="title">
								<img src="https://proyectoswozial.com/rodarte2/img/design/logoFooter.png" style="width:100%; max-width:300px;">
								{{-- <img src="{{ asset('img/design/logo.png')}}" style="width:100%; max-width:300px;"> --}}
								{{-- <img src="{{ url('img/design/logo.png')}}" style="width:100%; max-width:300px;"> --}}
							</td>

							<td>
								Orden #: {{$pedido->id}}<br>
								Creada: {{date("d/m/Y", strtotime($pedido->created_at))}}<br>
							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr class="information">
				<td colspan="4">
					<table>
						<tr>
							<td>
								{{$config->title}} <br>
								{{$config->telefono}} <br>
								{{$config->remitente}} <br>
							</td>

							<td>
								{{$user->name}} {{$user->lastname}}<br>
								Tel: {{$user->telefono}}<br>
								Email: {{$user->email}}
							</td>
						</tr>
					</table>
				</td>
			</tr>

			{{-- <tr class="heading">
				<td>
					Metodo de Pago
				</td>

				<td>
					Check #
				</td>
			</tr>

			<tr class="details">
				<td>
					Check
				</td>

				<td>
					1000
				</td>
			</tr> --}}

			<tr class="heading">
				<td>
					Producto
				</td>
				<td style="width:10%;">
					Cant
				</td>
				<td style="width:15%;text-align:right;">
					Precio
				</td>
				<td style="width:10%;text-align:right;">
					Importe
				</td>
			</tr>
			@foreach ($detalles as $det)
			<tr class="item">
				<td class="text-uppercase">
					{{ $det->attributes->producto->nombre }} | {{$det->name}}
				</td>
				<td style="">
					{{$det->quantity}}
				</td>
				<td style="text-align:right;">
					{{ number_format($det->price,2)}}
				</td>
				<td style="text-align:right;">
					{{ number_format($det->price*$det->quantity,2)}}
				</td>
			</tr>
			@endforeach

			{{-- <tr class="item last">
				<td>
					Domain name (1 year)
				</td>

				<td>
					$10.00
				</td>
			</tr> --}}
			@if ($pedido->envio)
			<tr class="item">
				<td>
					Envío
				</td>
				<td colspan="3" style="">
					{{ number_format($pedido->envio,2)}}
				</td>
			</tr>

			@endif

			<tr class="item">
				<td colspan="3" style="text-align:right;">SubTotal: </td>

				<td style="text-align:left;">
					${{ number_format($pedido->importe,2)}}
				</td>
			</tr>
			@if ($pedido->iva)
				<tr class="item">
					<td colspan="3" style="text-align:right;">IVA: </td>

					<td style="text-align:left;">
						${{ number_format($pedido->iva,2)}}
					</td>
				</tr>
			@endif
			<tr class="total">
				{{-- <td> </td>
				<td> </td> --}}
				<td colspan="3" style="text-align:right;">Total: </td>
				<td style="text-align:left;">
					${{ number_format(($pedido->importe+$pedido->iva+$pedido->envio),2)}}
				</td>
			</tr>
			<tr class="heading">
				<td colspan="4">
					Datos Bancarios
				</td>
			</tr>
			<tr class="details">
				<td colspan="3">
					{!! nl2br($config->banco)!!}
				</td>
			</tr>
		</table>
	</div>
</body>
</html>
