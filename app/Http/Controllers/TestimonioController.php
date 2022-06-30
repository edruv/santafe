<?php

namespace App\Http\Controllers;

use App\Testimonio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TestimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
			$validate = Validator::make($request->all(), [
				'nombre' => 'required',
				'descripcion' => 'required',
			], [], []);

			if ($validate->fails()) {
				\Toastr::error('Error, se requieren mas datos');
				return redirect()->back()->withErrors($validate);
			}

			Testimonio::create([
				'nombre' => $request->nombre,
				'descripcion' => $request->descripcion,
				'producto' => $request->producto,
			]);

			\Toastr::success('Guardado');
			return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonio $testi) {
			return view('admin.productos.testimonioshow', compact(['testi']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonio $testi) {
			return view('admin.productos.testimonioedit', compact(['testi']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonio $testi) {
			$validate = Validator::make($request->all(), [
				'nombre' => 'required',
				'descripcion' => 'required',
			], [], []);

			if ($validate->fails()) {
				\Toastr::error('Error, se requieren mas datos');
				return redirect()->back()->withErrors($validate);
			}

			$testi->nombre = $request->nombre;
  		$testi->descripcion = $request->descripcion;

			$testi->save();

  		\Toastr::success('Guardado');
  		return redirect()->route('productos.show', $testi->producto);
    }

		public function updateimg(Request $request, $producto) {
  		$product = Testimonio::find($producto);

      if ($request->hasFile('portada') ) {
        $field = $request->type;
  			$file = $request->file($field);
  			$extension = $file->getClientOriginalExtension();
  			$namefile = Str::random(30) . '.' . $extension;

  			\Storage::disk('local')->put("/img/photos/testimonios/" . $namefile, \File::get($file));

  			if (!empty($product->$field)) {
  				\Storage::disk('local')->delete("/img/photos/testimonios/" . $product->$field);
  			}

  			$product->$field = $namefile;
  		}

  		$product->save();

  		\Toastr::success('Guardado');
  		return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonio  $testimonio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
			if (empty($request->testimonio)) {
				\Toastr::error('Error, intentalo mas tarde');
				return redirect()->back();
			}

			$testi = Testimonio::find($request->testimonio);
			if (!empty($testi)) {
				if (!empty($testi->portada)) {
					\Storage::disk('local')->delete("/img/photos/testimonios/" . $testi->portada);
				}
				$testi->delete();
				\Toastr::success('Eliminado Exitosamente');
				return redirect()->back();
			}
    }
}
