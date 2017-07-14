<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesFormacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_formacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('apellido_paterno', 45);
            $table->string('apellido_materno', 45);
            $table->integer('tipo_cliente_id');
            $table->string('rfc', 20);
            $table->integer('lugar_nacimiento_id');
            $table->date("fecha_nacimiento");
            $table->integer('estado_civil_id');
            $table->integer('genero_id');
            $table->integer('nacionalidad_id');
            $table->string('telefono_celular', 20);
            $table->integer('compania_celular_id');
            $table->integer('identificacion_id');
            $table->string('numero_identificacion', 50);
            $table->boolean("cliente_competencia")->default(false);
            $table->integer('competencia_id');
            $table->integer('prestamo_solicitado_id');
            $table->string('prestamo_solicitado', 20);
            $table->integer('destino_prestamo_id');
            $table->string('codigo_postal', 17);
            $table->integer('estado_id');
            $table->string('localidad', 80);
            $table->string('delegacion', 70);
            $table->string('colonia', 80);
            $table->string('calle', 80);
            $table->string('numero_exterior', 10);
            $table->string('numero_interior', 10);
            $table->integer('sucursal_id');
            $table->integer('promotor_id');
            $table->integer('grupo_id');
            $table->boolean("autorizacion_impresa")->default(false);
            $table->boolean("preafiliado")->default(false);
            $table->integer('estatus_cliente_id');
            $table->integer('motivo_rechazo_id');
            $table->string('motivo_rechazo', 250);
            $table->string('consecutivo_grupo', 30);
            $table->string('consecutivo_cliente', 30);
            $table->dateTime("fecha_sincronizacion");
            $table->dateTime("fecha_consulta_buro");
            $table->string('codigo_postal_negocio', 25);
            $table->string('estado_negocio', 50);
            $table->string('localidad_negocio', 80);
            $table->string('delegacion_negocio', 80);
            $table->string('colonia_negocio', 80);
            $table->string('calle_negocio', 80);
            $table->string('num_exterior_negocio', 10);
            $table->string('num_interior_negocio', 10);
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
        Schema::dropIfExists('clientes_formacion');
    }
}
