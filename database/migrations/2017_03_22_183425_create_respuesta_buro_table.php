<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestaBuroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('respuesta_buro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreCliente', 150);
            $table->dateTime("fechaConsulta");
            $table->string('nombreOtorgante', 100);
            $table->dateTime("fechaApertura");
            $table->string('creditoMaximo', 30);
            $table->string('saldoActual', 45);
            $table->string('saldoVencido', 45);
            $table->string('frecuenciaPago', 50);
            $table->string('montoAPagar', 45);
            $table->integer('pagosVencidos');
            $table->string('responsabilidad', 100);
            $table->bigInteger('idCon');
            $table->bigInteger('idTlCon');
            $table->boolean("estatus")->default(true);
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respuesta_buro');
    }
}
