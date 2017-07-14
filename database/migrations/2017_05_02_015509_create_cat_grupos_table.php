<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursal_id')->unsigned();
            $table->integer('promotor_id')->unsigned();
            $table->string('nombre_grupo', 80);
            $table->dateTime('fecha_inicio_ciclo');
            $table->dateTime('fecha_fin_ciclo');
            $table->integer('num_ciclo');
            $table->string('dia_reunion', 100);
            $table->string('hora_reunion', 20);
            $table->string('telefono', 30);
            $table->string('domicilio', 250);
            $table->dateTime('fecha_alta_grupo');
            $table->string('contacto', 140);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cat_grupos', function($table) {
            $table->foreign('promotor_id')->references('id')->on('cat_promotores');
            $table->foreign('sucursal_id')->references('id')->on('cat_sucursales');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_grupos');

        Schema::table('cat_grupos', function($table)
        {
            $table->dropForeign('promotor_id');
            $table->dropForeign('sucursal_id');
        });
    }
}
