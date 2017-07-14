<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatPromotoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_promotores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sucursal_id')->unsigned();
            $table->string('nombre', 40);
            $table->string('paterno', 40);
            $table->string('materno', 40);
            $table->string('nombre_promotor', 120);
            $table->string('telefono', 40);
            $table->string('num_empleado', 40);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('cat_promotores', function($table) {
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
        Schema::dropIfExists('cat_promotores');

        Schema::table('cat_promotores', function($table)
        {
            $table->dropForeign('sucursal_id');
        });
    }
}
