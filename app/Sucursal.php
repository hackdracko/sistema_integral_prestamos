<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "cat_sucursales";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nombre_sucursal',
        'direccion',
        'colonia',
        'poblacion',
        'estado_id',
        'localidad',
        'codigo_postal',
        'telefono',
        'correo',
        'iva'
    ];

    public function promotor(){
        return $this->belongsTo('App\Promotor', 'promotor_id');
    }

    public function grupo(){
        return $this->belongsTo('App\Grupo', 'sucursal_id');
    }
}
