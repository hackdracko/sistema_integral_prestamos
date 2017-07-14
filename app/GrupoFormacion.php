<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoFormacion extends Model
{
    protected $table = "grupos_formacion";
    protected $primaryKey = "id";


    protected $fillable = [
        'id',
        'sucursal_id',
        'promotor_id',
        'sts_grupocliente_id',
        'nombre_grupo',
        'fecha_alta_grupo',
        'promotor_alta',
        'consecutivo_grupo'
    ];

    public function sucursal(){
        return $this->hasOne('App\Sucursal', 'id', 'sucursal_id');
    }

    public function promotores(){
        return $this->belongsTo('App\Usuario', 'promotor_id');
    }
}
