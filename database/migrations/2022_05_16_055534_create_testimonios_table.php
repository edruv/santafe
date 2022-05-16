<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonios', function (Blueprint $table) {
            $table->bigIncrements('id');
						$table->string('nombre');
						$table->text('descripcion')->nullable();
						$table->string('portada')->nullable();
						$table->unsignedBigInteger('producto');
						$table->boolean('activo')->default(1);
						$table->integer('orden')->default(666);
						$table->foreign('producto')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonios');
    }
}
