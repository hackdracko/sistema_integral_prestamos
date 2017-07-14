<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promotor_id')->unsigned();
            $table->string('usuario', 15)->unique();
            $table->string('password', 50);
            $table->boolean("administrador")->default(false);
            $table->dateTime("fecha_vencimiento");
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('usuarios', function($table) {
            $table->foreign('promotor_id')->references('id')->on('cat_promotores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');

        Schema::table('usuarios', function($table)
        {
            $table->dropForeign('promotor_id');
        });
    }
}
