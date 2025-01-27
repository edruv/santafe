<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductosPhoto extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'producto','titulo','image','galeria','orden',
	];

	public function producto() {
		return $this->belongsTo('App\Producto');
	}
}
