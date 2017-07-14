<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespuestasBuroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respuestas_buro', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_cliente', 150);
            $table->dateTime("fecha_consulta");
            $table->string('nombre_otorgante', 100);
            $table->dateTime("fecha_apertura");
            $table->string('credito_maximo', 30);
            $table->string('saldo_actual', 45);
            $table->string('saldo_vencido', 45);
            $table->string('frecuencia_pago', 50);
            $table->string('monto_a_pagar', 45);
            $table->integer('pagos_vencidos');
            $table->string('responsabilidad', 100);
            $table->bigInteger('con_id');
            $table->bigInteger('tl_con_id');
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
        Schema::dropIfExists('respuestas_buro');
    }
}
