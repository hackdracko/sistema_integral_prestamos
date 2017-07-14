<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("sucursal_id")->unsigned();
            $table->integer("promotor_id")->unsigned();
            $table->integer("grupo_id")->unsigned();
            $table->integer("tipo_cliente_id");
            $table->integer("ciclo_cliente");
            $table->string('nombre', 45);
            $table->string('apellido_paterno', 45);
            $table->string('apellido_materno', 45);
            $table->string('rfc', 50);
            $table->string('curp', 50);
            $table->integer('lugar_nacimiento_id');
            $table->date("fecha_nacimiento");
            $table->string('nacionalidad', 50);
            $table->integer('genero_id');
            $table->string('calle', 80);
            $table->string('numero_exterior', 10);
            $table->string('numero_interior', 10);
            $table->string('colonia', 80);
            $table->string('delegacion', 100);
            $table->integer('estado_id');
            $table->string('localidad', 100);
            $table->string('codigo_postal', 17);
            $table->string('lada_casa', 10);
            $table->string('telefono_casa', 20);
            $table->string('lada_trabajo', 10);
            $table->string('telefono_trabajo', 20);
            $table->string('ext_trabajo', 10);
            $table->string('telefono_celular', 50);
            $table->integer("estado_civil_id")->unsigned();
            $table->string('ocupacion', 100);
            $table->string('identificacion', 50);
            $table->string('num_identificacion', 50);
            $table->float('ahorro_inicial', 8);
            $table->float('saldo_ahorro', 8);
            $table->float('prestamos_autorizado', 8);
            $table->string('tarjeta_num', 30);
            $table->dateTime("fecha_registro");
            $table->date("fecha_afiliacion");
            $table->boolean("cliente_competencia")->default(false);
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
        Schema::dropIfExists('solicitud_clientes');
    }
}
