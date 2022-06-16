<?php

namespace App\Http\Controllers;

use App\Seccion;
use App\Elemento;
use App\Carrusel;
use App\Producto;
use App\ProductosPhoto;
use App\ProductoMedida;
use App\Novedad;
use App\Politica;
use App\Faq;
use App\Categoria;
use App\Configuracion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class FrontController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
		public function index(){

			$carrusel = Carrusel::orderBy('orden','asc')->get();

			foreach ($carrusel as $carru) {
				if ($carru->video) {
					if (Str::contains($carru->video, 'v=')) {
						$pos=strpos($carru->video, 'v');
						$videoPhoto=substr($carru->video, ($pos+2));
					}

					if (Str::contains($carru->video, 'youtu.be')) {
						$pos=strrpos($carru->video, '/');
						$videoPhoto=substr($carru->video, ($pos+1));
					}

					$carru->video = [
						'url' => $carru->video,
						'idVideo' => $videoPhoto
					];
				}
			}

			$elements = Elemento::where('seccion',1)->get();
			// $elements = Elemento::where('seccion',1)->get();
			// return view('front.index',compact('elements'));
			$desta = Producto::where('activo',1)->where('inicio',1)->get();
			// $empresarial = Producto::where('activo',1)->where('inicio',1)->get();
			// $social = Producto::where('activo',1)->where('inicio',1)->get();
			// $musica = Producto::where('activo',1)->where('inicio',1)->get();
			// $recintos = Producto::where('activo',1)->where('inicio',1)->get();

			foreach ($desta as $dest) {
				$dest->photo = ProductosPhoto::where('producto',$dest->id)->where('galeria',1)->orderBy('orden', 'asc')->get()->first();
				// $prod->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
				$dest->parent = Categoria::find($dest->categoria)->parent;
			}
			// foreach ($empresarial as $dest) {
			// 	$dest->photo = ProductosPhoto::where('producto',$dest->id)->orderBy('orden', 'asc')->get()->first();
			// 	// $prod->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
			// }
			// foreach ($social as $dest) {
			// 	$dest->photo = ProductosPhoto::where('producto',$dest->id)->orderBy('orden', 'asc')->get()->first();
			// 	// $prod->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
			// }
			// foreach ($musica as $dest) {
			// 	$dest->photo = ProductosPhoto::where('producto',$dest->id)->orderBy('orden', 'asc')->get()->first();
			// 	// $prod->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
			// }
			// foreach ($recintos as $dest) {
			// 	$dest->photo = ProductosPhoto::where('producto',$dest->id)->orderBy('orden', 'asc')->get()->first();
			// 	// $prod->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
			// }

			// return view('front.index',compact('carrusel','elements','empresarial','social','musica','recintos'));
			return view('front.index',compact('carrusel','elements','desta'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
		public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
		public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
		public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
		public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
		public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
		public function destroy($id) {
		//
	}

		/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function contacto(){
		$seccion = Seccion::find(2);
		$elements = Elemento::where('seccion', $seccion->id)->get();

		return view('front.contacto',compact('elements'));
	}

	public function contact(){
		$seccion = Seccion::find(3);
		$elements = Elemento::where('seccion', $seccion->id)->get();

		return view('front.contacto2',compact('elements'));
	}

	public function detailsdemo(){
		return view('front.contacto2');
	}

	public function productos(){
		$products = Producto::where('activo',1)->where('inicio',1)->get();

		$cats = Categoria::all();

		$seccion = Seccion::find(2);
		$elements = Elemento::where('seccion', $seccion->id)->get();

		return view('front.tienda',compact('products','cats','elements'));
		// return $data;
		// return $products;
	}

	// public function productos(Request $request){
	// 	$products = Producto::where('activo',1);
	// 	$cats = Categoria::where('parent',0)->get();
	//
	// 	if (!empty($cat)) {
	// 			if ($cat->parent == 0 ) {
	// 				$catsProd = Categoria::where('parent',$cat->id)->get();
	// 				$products->whereIn('categoria',$catsProd->pluck('id'));
	// 			} else {
	// 				$catsProd = Categoria::where('parent',$cat->parent)->get();
	// 				$products->where('categoria',$cat->id);
	// 				// $catsProd = null;
	// 			}
	// 		} else {
	// 			$catsProd = null;
	// 		}
	//
	// 	foreach ($products as $prod) {
	// 		$fphoto = ProductosPhoto::where('producto',$prod->id)->orderBy('orden','ASC')->get()->first();
	// 		$prod->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
	// 	}
	//
	// 	if ($request->ajax()) {
	// 		$products = Producto::where('activo',1)->orderBy('orden','asc')->paginate(4);
	// 		foreach ($products->items() as $prod) {
	// 			$photo = ProductosPhoto::where('producto',$prod->id)->orderBy('orden', 'asc')->get()->first();
	// 			$prod->photo = ($photo) ? $photo->image : null ;
	// 		}
	// 		return $products;
	// 	}
	//
	// 	return view('front.tienda',compact('products','cats','catsProd'));
	// 	// return $data;
	// }

	public function details(Producto $product){

		// $product = Producto::find($producto);

		$product->categoria = Categoria::find($product->categoria);

		$product->gallery = $product->fotos()->where('galeria',1)->orderBy('orden', 'asc')->get();
		$product->gallery2 = $product->fotos()->where('galeria',2)->orderBy('orden', 'asc')->get();

		$productos_rel = $product->relacionados()->get()->pluck('otroProducto');

		$productos_rel = Producto::whereIn('id', $productos_rel)->get();

		foreach ($productos_rel as $prodimg) {
			$fphoto = ProductosPhoto::where('producto',$prodimg->id)->orderBy('orden','ASC')->get()->first();
			$prodimg->photo = (!empty($fphoto)) ? $fphoto['image'] : null ;
		}

		$testimonios = $product->testimonios()->where('activo',1)->get();

		switch ($product->categoria->id) {
			case '1':
			case '2':
				return view('front.social', compact(['product','productos_rel','testimonios']));
			break;
			case '3':
				return view('front.musica', compact(['product','productos_rel','testimonios']));
			break;
			case '4':
				return view('front.terraza', compact(['product','productos_rel','testimonios']));
			break;
		}
		// $variantes = ProductoVariante::where('producto', $product->id)->get();
		// $medidas = ProductoMedida::where('producto',$product->id)->orderBy('orden', 'asc')->get();
		// return view('front.detalles', compact('product','variantes','productos_rel','elements'));
		// $data = array(
		// 	'product' => $product,
		// 	'medidas' => $medidas,
		// );
		// return response()->json($data);
		// return $product;
	}

	public function recintos(Request $request){

		$recintos = Producto::where('categoria',4);

		if ($request->search) {
			$recintos->where('nombre','like',"%$request->search%")->orWhere('ciudad','like',"%$request->search%");
		}
		$recintos = $recintos->get();
		return view('front.terrazas', compact('recintos',));
		// return view('front.aboutus');
	}

	public function aboutus(){
		$seccion = Seccion::find(3);
		$elements  = Elemento::where('seccion',$seccion->id)->get();

		return view('front.aboutus', compact('elements', 'seccion',));
		// return view('front.aboutus');
	}
	public function garantias(){
		$politica = Politica::find(5);
		return view('front.politicas',compact("politica"));
	}

	public function aviso(){
		$politica = Politica::find(1);
		return view('front.politicas',compact("politica"));
	}

	public function pagos(){
		$politica = Politica::find(2);
		return view('front.politicas',compact("politica"));
	}

	public function devoluciones(){
		$politica = Politica::find(3);
		return view('front.politicas',compact("politica"));
	}

	public function tyc(){
		$politica = Politica::find(4);
		return view('front.politicas',compact("politica"));
	}

	public function faqs(){
		$faqs = Faq::all();
		return view('front.faq',compact("faqs"));
	}

	// correo de contacto normal
	public function mailcontact(Request $request){
		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			'correo' => 'required',
			'telefono' => 'required|numeric',
			'mensaje' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos datos');
			return redirect()->back();
		}

		$data = array(
			'nombre' => $request->nombre,
			'correo' => $request->correo,
			'telefono' => $request->telefono,
			'mensaje' => $request->mensaje,
			'asunto' => 'Formulario de contacto',
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		$html = view('front.mailcontact',compact('data'));
		// return view('front.mailcontact',compact('data'));

		$config = Configuracion::first();

		$mail = new PHPMailer;
		$mail->isSMTP();
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->Host = $config->remitentehost;
		$mail->Port = $config->remitenteport;
		$mail->SMTPAuth = true;
		$mail->Username = $config->remitente;
		$mail->Password = $config->remitentepass;
		$mail->SMTPSecure = $config->remitenteseguridad;
		$mail->SetFrom($config->remitente, $config->title);
		$mail->isHTML(true);

		$mail->addAddress($config->destinatario,$config->title);
		if (!empty($config->destinatario2)) {
			$mail->AddBCC($config->destinatario2,$config->title);
		}
		$mail->Subject = $data['asunto'];
		$mail->msgHTML($html);
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


		if ($mail->send()) {
			\Toastr::success('Correo enviado Exitosamente!');
			return redirect()->back();
		} else {

			\Toastr::error('No se ha podido enviar el correo/ '. $mail->ErrorInfo);
			return redirect()->back();
		}
	}

	public function mailcontactTwo(Request $request){
		$validate = Validator::make($request->all(),[
			'nombre' => 'required',
			'telefono' => 'required|numeric',
			'email' => 'required',
			'fecha' => 'nullable',
			'servicio' => 'nullable',
			'ubicacion' => 'nullable',
			'numero' => 'nullable',
		],[],[]);

		if ($validate->fails()) {
			\Toastr::error('Error, se requieren todos datos');
			return redirect()->back();
		}

		$data = array(
			'nombre' => $request->nombre,
			'telefono' => $request->telefono,
			'email' => $request->email,
			'fecha' => $request->fecha,
			'servicio' => $request->servicio,
			'ubicacion' => $request->ubicacion,
			'numero' => $request->numero,
			'mensaje' => $request->mensaje,
			'asunto' => 'Formulario de cotizacion',
			'hoy' => Carbon::now()->format('d-m-Y')
		);

		$html = view('front.mailcontact2',compact('data'));
		// return view('front.mailcontact2',compact('data'));

		$config = Configuracion::first();

		$mail = new PHPMailer;
		$mail->isSMTP();
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->Host = $config->remitentehost;
		$mail->Port = $config->remitenteport;
		$mail->SMTPAuth = true;
		$mail->Username = $config->remitente;
		$mail->Password = $config->remitentepass;
		$mail->SMTPSecure = $config->remitenteseguridad;
		$mail->SetFrom($config->remitente, $config->title);
		$mail->isHTML(true);

		$mail->addAddress($config->destinatario,$config->title);
		if (!empty($config->destinatario2)) {
			$mail->AddBCC($config->destinatario2,$config->title);
		}
		$mail->Subject = $data['asunto'];
		$mail->msgHTML($html);
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


		if ($mail->send()) {
			\Toastr::success('Correo enviado Exitosamente!');
			return redirect()->back();
		} else {

			\Toastr::error('No se ha podido enviar el correo/ '. $mail->ErrorInfo);
			return redirect()->back();
		}
	}

}
