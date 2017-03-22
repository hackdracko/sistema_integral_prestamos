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
        /*Schema::create('clientes_formacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('apellidoPaterno', 45);
            $table->string('apellidoMaterno', 45);
            $table->integer('idTipoCliente');
            $table->string('rfc', 20);
            $table->integer('idLugarNacimiento');
            $table->date("fechaNacimiento");
            $table->integer('idClaveCivil');
            $table->integer('idGenero');
            $table->integer('idNacionalidad');
            $table->string('telefonoCelular', 20);
            $table->integer('idCompaniaCelular');
            $table->integer('idIdentificacion');
            $table->string('numeroIdentificacion', 50);
            $table->boolean("clienteCompetencia")->default(false);
            $table->integer('idCompetencia');
            $table->integer('idPrestamoSolicitado');
            $table->string('prestamoSolicitado', 20);
            $table->integer('idDestinoPrestamo');
            $table->string('codigoPostal', 17);
            $table->integer('idEstado');
            $table->string('localidad', 80);
            $table->string('delegacion', 70);
            $table->string('colonia', 80);
            $table->string('calle', 80);
            $table->string('numeroExterior', 10);
            $table->string('numeroInterior', 10);
            $table->integer('idSucursal');
            $table->integer('idPromotor');
            $table->integer('idGrupo');
            $table->boolean("autorizacionImpresa")->default(false);
            $table->boolean("preafiliado")->default(false);
            $table->integer('idEstatusCliente');
            $table->integer('idMotivoRechazo');
            $table->string('motivoRechazo', 250);
            $table->string('consecutivoGrupo', 30);
            $table->string('consecutivoCliente', 30);
            $table->dateTime("fechaSincronizacion");
            $table->dateTime("fechaConsultaBuro");
            $table->string('codigoPostalNegocio', 25);
            $table->string('estadoNegocio', 50);
            $table->string('localidadNegocio', 80);
            $table->string('delegacionNegocio', 80);
            $table->string('coloniaNegocio', 80);
            $table->string('calleNegocio', 80);
            $table->string('numExteriorNegocio', 10);
            $table->string('numInteriorNegocio', 10);
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
        Schema::dropIfExists('clientes_formacion');
    }
}
