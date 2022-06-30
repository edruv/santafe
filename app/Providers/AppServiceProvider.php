<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Configuracion;
use App\Categoria;
use App\Producto;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Schema::defaultStringLength(125);
				$configs = Configuracion::find(1);
				$prods = Producto::orderBy('orden','asc')->get();
        // $cats = Categoria::all();

				View::share([
					'config' => $configs,
					'prods' => $prods,
					// 'cats' => $cats,
				]);
    }
}
