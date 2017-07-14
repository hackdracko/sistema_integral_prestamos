<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposFormacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_formacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursal_id')->unsigned();
            $table->integer('promotor_id')->unsigned();
            $table->integer('sts_grupocliente_id')->unsigned();
            $table->string('nombre_grupo', 80);
            $table->dateTime('fecha_alta_grupo');
            $table->string('promotor_alta');
            $table->string('consecutivo_grupo', 60);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('grupos_formacion', function($table) {
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
        Schema::dropIfExists('grupos_formacion');

        Schema::table('grupos_formacion', function($table)
        {
            $table->dropForeign('promotor_id');
            $table->dropForeign('sucursal_id');
        });
    }
}
