<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatSucursalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_sucursales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_sucursal', 50);
            $table->string('direccion', 60);
            $table->string('colonia', 50);
            $table->string('poblacion', 50);
            $table->integer('estado_id')->unsigned();
            $table->string('localidad', 60);
            $table->string('codigo_postal', 10);
            $table->string('telefono', 100);
            $table->string('correo', 155);
            $table->float('iva', 4);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_sucursales');
    }
}
