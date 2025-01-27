<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $fillable = [
		'nombre','descripcion','descripcion_rapida','categoria','portada','pdf','ciudad','inicio','activo','orden',
	];

	public function fotos() {
		return $this->hasMany('App\ProductosPhoto', 'producto');
	}

	public function relacionados(){
		return $this->hasMany('App\ProductoRelacion','producto');
	}

	public function variantes() {
		return $this->hasMany('App\ProductoVariante', 'producto');
	}

	public function medidas() {
		return $this->hasMany('App\ProductoMedida', 'producto');
	}

	public function testimonios() {
		return $this->hasMany('App\Testimonio', 'producto');
	}
}
