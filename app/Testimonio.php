<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'nombre','descripcion','portada','producto','activo','orden',
	];

	public function producto(){
		return $this->belongsTo('App\Producto');
	}
}
