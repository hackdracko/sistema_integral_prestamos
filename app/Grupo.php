<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "cat_grupos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'sucursal_id',
        'promotor_id',
        'nombre_grupo',
        'fecha_inicio_ciclo',
        'fecha_fin_ciclo',
        'num_ciclo',
        'dia_reunion',
        'hora_reunion',
        'telefono',
        'domicilio',
        'fecha_alta_grupo',
        'contacto'
    ];

    public function sucursal(){
        return $this->hasOne('App\Sucursal', 'id', 'sucursal_id');
    }

    public function promotores(){
        return $this->belongsTo('App\Usuario', 'promotor_id');
    }
}
